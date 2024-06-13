<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/menu.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Menu</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#" id="music-toggle">
                <img src="{{ asset('web') }}/assets/btn/misic.png" alt="music on" width="60" height="auto"
                    id="music-on-icon" />
                <img src="{{ asset('web') }}/assets/btn/music_off.png" alt="music off" width="60" height="auto"
                    id="music-off-icon" style="display: none" />
            </a>
            <audio id="background-music" src="{{ asset('web') }}/assets/musik/bg_musik.mp3" loop></audio>
            <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">
                <img src="{{ asset('web') }}/assets/btn/about.png" alt="About" width="60" height="auto" />
            </a>
        </div>
    </nav>

    <!-- INFO -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog rounded-3">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel">About</h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body">Some text in the Modal..</div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- INFO -->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <img src="{{ asset('web') }}/assets/img/title_menu.png" class="img-fluid slide-up-down" width="500px"
                    alt="Title">
            </div>
        </div>
        <div class="row mt-5">
            <div class="btn-group">
                <a href="/belajar" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_belajar.png" class="img-fluid" width="300px"
                        alt="Belajar">
                </a>
                <a href="/ujikom" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_ujikom.png" class="img-fluid" width="300px"
                        alt="Ujikom">
                </a>
                <a href="/bermain" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_bermain.png" class="img-fluid" width="300px"
                        alt="Bermain">
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('web') }}/assets/js/loading.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const musicToggle = document.getElementById('music-toggle');
            const musicOnIcon = document.getElementById('music-on-icon');
            const musicOffIcon = document.getElementById('music-off-icon');
            const backgroundMusic = document.getElementById('background-music');

            // Check localStorage to set the initial state
            if (localStorage.getItem('musicStatus') === 'on') {
                backgroundMusic.play();
                musicOnIcon.style.display = 'block';
                musicOffIcon.style.display = 'none';
            } else {
                musicOnIcon.style.display = 'none';
                musicOffIcon.style.display = 'block';
            }

            musicToggle.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                if (backgroundMusic.paused) {
                    backgroundMusic.play();
                    localStorage.setItem('musicStatus', 'on');
                    musicOnIcon.style.display = 'block';
                    musicOffIcon.style.display = 'none';
                } else {
                    backgroundMusic.pause();
                    localStorage.setItem('musicStatus', 'off');
                    musicOnIcon.style.display = 'none';
                    musicOffIcon.style.display = 'block';
                }
            });


        });
    </script>

</body>

</html>
