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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/belajar.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Belajar</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand link-page">
                <img src="{{ asset('web') }}/assets/btn/back.png" alt="back" width="60" height="auto" />
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-2 mb-5">
                <img src="{{ asset('web') }}/assets/img/title_belajar.png" class="img-fluid slide-up-down"
                    width="900px" alt="Title">
            </div>
        </div>
        <div class="row mt-2">
            <div class="btn-group">
                <a href="/tatasurya" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_tatasurya.png" class="img-fluid" width="300px"
                        alt="Tatasurya">
                </a>
                <a href="/rotasibumi" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_rotasi.png" class="img-fluid" width="300px"
                        alt="Rotasi Bumi">
                </a>
                <a href="/revolusibumi" class="col-4 text-center link-page">
                    <img src="{{ asset('web') }}/assets/btn/btn_revolusi.png" class="img-fluid" width="300px"
                        alt="Revolusi Bumi">
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
            const backgroundMusic = document.getElementById('background-music');

            // Check localStorage to set the initial state
            if (localStorage.getItem('musicStatus') === 'on') {
                backgroundMusic.play();
            }


        });
    </script>

    <audio id="background-music" src="{{ asset('web') }}/assets/musik/bg_musik.mp3" loop></audio>
</body>

</html>
