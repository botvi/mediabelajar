<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tebak Gambar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/tebakgambar.css">

</head>

<body>
    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand link-page" href="/">
                <img src="{{ asset('web') }}/assets/btn/back.png" width="60" height="auto" />
            </a>
            <div class="navbar-brand text-start col">
                <div class="text-light">
                    <h2><span style="color: rgb(246, 172, 26);">Bermain
                        </span> <span class="infotitle" href="#" data-bs-toggle="modal"
                            data-bs-target="#infoModal"><img src="{{ asset('web') }}/assets/btn/about.png"
                                width="25px" alt=""></span>
                    </h2>
                </div>
            </div>

        </div>
    </nav>

    <!-- INFO -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Tebak Gambar </span>
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

    <div class="game-container">
        <h1 class="my-4 text-light"><span style="color: #ffffff;">Tebak</span> <span
                style="color: rgb(246, 172, 26);">Gambar
            </span></h1>
        <div id="time-container" class="mb-3"></div> <!-- Tambahkan div untuk menampilkan waktu -->
        <div class="card mb-3" id="guess-card">
            <div class="card-body text-center">
                <div id="image-container" class="mb-3">
                    <img id="game-image" src="" alt="Gambar" class="img-fluid rounded" width="250px">
                </div>
                <div id="clue-container" class="mb-3">
                    <h5>Clue :</h5>
                    <p id="clue-text"></p>
                </div>
                <div id="answer-container" class="mb-3">
                    <input type="text" id="answer" class="form-control" placeholder="Ketik jawaban di sini...">
                </div>
                <button id="submit-button" class="btn btn-submit text-light mb-3">Submit</button>
                <div id="result-message"></div>
            </div>
        </div>
    </div>



    <div class="row justify-content-center align-items-center">
        <div class="col-6">
            <div class="card text-center result-card" id="result-card" style="display: none;">
                <div class="card-header">
                    Quiz Completed!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Waktu Pengerjaan</h5>
                    <div id="final-result" class="text-center card-text"></div>
                </div>
                <div class="card-footer text-muted">
                    <a href="/bermain" class="btn btn-submit text-light">Play Again</a>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            let images = [];

            // Fetch data from the API
            $.ajax({
                url: '/gettebakgambar', // Update with your actual API endpoint
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    images = response.images.map(item => ({
                        gambar: item.gambar,
                        jawaban: item.jawaban,
                        petunjuk: item.petunjuk
                    }));
                    showImage(currentImageIndex);
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });

            let currentImageIndex = 0;
            let startTime = null; // Waktu mulai
            let totalDuration = 0; // Durasi total

            function showImage(index) {
                if (images.length === 0) return; // Wait until images are loaded
                $('#game-image').attr('src', images[index].gambar);
                $('#clue-text').text(images[index].petunjuk);
                startTime = new Date(); // Mulai waktu ketika menampilkan gambar
            }

            function formatTime(seconds) {
                if (seconds < 60) {
                    return seconds.toFixed(0) + " detik";
                } else {
                    const minutes = Math.floor(seconds / 60);
                    const remainingSeconds = Math.round(seconds % 60); // Bulatkan detik tersisa
                    return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')} menit`;
                }
            }

            function checkAnswer() {
                const userAnswer = $('#answer').val().trim().toLowerCase();
                const correctAnswer = images[currentImageIndex].jawaban.toLowerCase();
                if (userAnswer === correctAnswer) {
                    const endTime = new Date(); // Waktu selesai ketika jawaban benar
                    const durationInSeconds = (endTime - startTime) / 1000; // Durasi dalam detik
                    totalDuration += durationInSeconds; // Tambahkan durasi ke total
                    Swal.fire({
                        icon: 'success',
                        title: 'Jawaban benar!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    if (currentImageIndex === 0) {
                        $('#submit-button').prop('disabled', true); // Menonaktifkan tombol submit jika sudah habis
                        $('#guess-card').hide(); // Sembunyikan card tebak gambar
                        $('.result-card').show(); // Tampilkan card hasil akhir
                        $('#final-result').text(`Total waktu: ${formatTime(totalDuration)}`);
                        saveCompletionTime(totalDuration); // Simpan waktu penyelesaian
                    } else {
                        showImage(currentImageIndex);
                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Jawaban salah!',
                        text: 'Coba lagi.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                $('#answer').val('');
            }

            $('#submit-button').click(function() {
                checkAnswer();
            });

            // Initial call to show the first image
            if (images.length > 0) {
                showImage(currentImageIndex);
            }

            function saveCompletionTime(time) {
                $.ajax({
    url: '/save-completion-time',
    method: 'POST',
    data: {
        waktu: Math.round(time),
        _token: '{{ csrf_token() }}' // Include CSRF token
    },
    success: function(response) {
        console.log(response.message);
    },
    error: function(error) {
        console.error('Error saving completion time:', error);
    }
});

            }
        });
    </script>

    <script src="{{ asset('web') }}/assets/js/loading.js"></script>
</body>

</html>
