<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/ujikom.css">

</head>

<body>


    <div class="app container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="mb-4">Uji Kompetensi</h1>
            </div>
            <div class="col-auto">
                <a href="/ujikom" class="link-page back-btn"><img src="{{ asset('web') }}/assets/btn/close_2.png"
                        width="60" height="auto" /></a>
            </div>
        </div>
        <div class="quiz">
            <h2 id="question"></h2>
            <div id="answer-buttons">
                <!-- Answer buttons will be dynamically added here -->
            </div>
            <button id="next-btn" class="btn btn-primary">Next</button>
        </div>
    </div>

    <!-- INFO -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Uji Kompetensi </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body">Tata surya adalah susunan benda-benda lagit yang terdiri atas matahari sebagai
                    pusat tata surya, planet-planet, komet, meteoroid, dan asteroid yang mengelilingi matahari. Planet
                    yang dekat dengan matahari bergerak lebih cepat daripada planet yang jauh dari Matahari.
                    <br><br>
                    Bidang edar planet-planet dalam mengelilingi matahari disebut bidang edar dan bidang edar bumi dalam
                    mengelilingi matahari disebut bidang ekliptika. Susunan Tata Surya terdiri atas Matahari, Planet
                    Dalam, Planet Luar, Komet, Meteorid, dan Asteroid.
                </div>
            </div>
        </div>
    </div>
    <!-- INFO -->

    {{-- MUSIK --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const backgroundMusic = document.getElementById('background-music');

            // Check localStorage to set the initial state
            if (localStorage.getItem('musicStatus') === 'on') {
                backgroundMusic.play();
            }
        });
    </script>
    <audio id="background-music" src="{{ asset('web') }}/assets/musik/bg_musik.mp3" loop></audio>
    {{-- MUSIK --}}

    <script src="{{ asset('web') }}/assets/js/loading.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        const questionEL = document.getElementById("question");
        const answerButtonsEL = document.getElementById("answer-buttons");
        const nextBtnEL = document.getElementById("next-btn");

        let currentQuestionIndex = 0;
        let score = 0;
        let questions = [];

        async function getQuestions() {
            try {
                const response = await fetch('/getujikom'); // Ubah URL sesuai dengan endpoint API Anda
                if (!response.ok) {
                    throw new Error('Failed to fetch questions');
                }
                questions = await response.json();
                startQuiz();
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to fetch questions. Please try again later.');
            }
        }

        function startQuiz() {
            currentQuestionIndex = 0;
            score = 0;
            nextBtnEL.innerHTML = "Next";
            showQuestion();
        }

        function showQuestion() {
            resetState();
            let currentQuestion = questions[currentQuestionIndex];
            let questionNo = currentQuestionIndex + 1;
            questionEL.innerHTML = questionNo + ". " + currentQuestion.question;

            currentQuestion.answers.forEach(answer => {
                const button = document.createElement("button");
                button.innerHTML = answer.text;
                button.classList.add("btn");
                answerButtonsEL.appendChild(button);

                button.addEventListener("click", () => selectAnswer(button, answer.correct));
            });
        }

        function resetState() {
            nextBtnEL.style.visibility = "hidden";
            answerButtonsEL.innerHTML = ''; // Clear answer buttons
            Array.from(answerButtonsEL.children).forEach(button => {
                button.classList.remove("correct", "incorrect"); // Remove correct and incorrect classes
                button.disabled = false; // Enable buttons
            });
        }

        function selectAnswer(button, isCorrect) {
            if (isCorrect) {
                button.classList.add("correct");
                score += 100 / questions.length;
            } else {
                button.classList.add("incorrect");
            }
            Array.from(answerButtonsEL.children).forEach(button => {
                button.disabled = true;
            });
            nextBtnEL.style.visibility = "visible";
        }

        async function showScore() {
            resetState();

            // Send score to the backend
            const finalScore = Math.round(score);
            try {
                const response = await fetch('/save-score', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    body: JSON.stringify({ score: finalScore })
                });
                if (!response.ok) {
                    throw new Error('Failed to save score');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to save score. Please try again later.');
            }

            // Create card elements
            const card = document.createElement('div');
            card.className = 'card text-center';

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body';
            cardBody.style.backgroundColor = '#036444';

            const cardTitle = document.createElement('h5');
            cardTitle.className = 'card-title text-light';
            cardTitle.innerHTML = 'Uji Kompetensi selesai!';

            const cardText = document.createElement('p');
            cardText.className = 'card-text text-light';
            cardText.innerHTML = `Score kamu ${finalScore} dari 100!`;

            // Append elements to build the card
            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardText);
            card.appendChild(cardBody);

            // Append card to the question element
            questionEL.innerHTML = ''; // Clear any existing content
            questionEL.appendChild(card);

            // Update next button
            nextBtnEL.innerHTML = "Play Again";
            nextBtnEL.style.visibility = "visible";
        }


        function handleNextButton() {
            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                showQuestion();
            } else {
                showScore();
            }
        }

        nextBtnEL.addEventListener("click", () => {
            if (currentQuestionIndex < questions.length) {
                handleNextButton();
            } else {
                startQuiz();
            }
        });

        getQuestions();
    </script>
</body>

</html>
