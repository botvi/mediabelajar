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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/rotasibumi.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Rotasi Bumi</title>
    <style>
        .card-custom {
            margin: 0 15px;
        }

        .bg-custom {
            border-top: 1px solid #e2e8f0;
            border-radius: 1.5rem;
            filter: drop-shadow(25px 8px 40px #ffffff);
            background: rgb(255 255 255 / 45%);
            -webkit-backdrop-filter: blur(8px);
            -moz-backdrop-filter: blur(8px);
            -ms-backdrop-filter: blur(8px);
            backdrop-filter: blur(8px);
            backface-visibility: hidden;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand link-page" href="/belajar">
                <img src="{{ asset('web') }}/assets/btn/back.png" width="60" height="auto" />
            </a>
            <div class="navbar-brand text-start col">
                <div class="text-light">
                    <h2><span style="color: #ffffff;">Rotasi</span> <span style="color: rgb(246, 172, 26);">Bumi
                        </span>
                    </h2>
                </div>
            </div>

        </div>
    </nav>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-12 text-center">
                <img src="{{ asset('web') }}/assets/gif/gif_bumi.gif" class="img-fluid" width="500px" alt="">
            </div>
            <div class="col-md-6 col-12 text-center mt-3 mt-md-0">
                <div class="card text-center card-custom bg-custom">
                    <div class="card-header">
                        Rotasi Bumi
                    </div>
                    <div class="card-body">
                        <p class="card-text">Rotasi bumi adalah perputaran bumi pada porosnya dari barat ke timur, yang
                            memakan waktu sekitar 24 jam atau satu hari. Pergerakan ini menyebabkan pergantian siang dan
                            malam. Selain itu, rotasi bumi juga menciptakan efek Coriolis yang mempengaruhi arah angin
                            dan arus laut, serta menyebabkan adanya zona waktu yang berbeda di berbagai bagian dunia.
                            Kecepatan rotasi bumi di khatulistiwa adalah sekitar 1670 km/jam. Rotasi bumi sedikit
                            melambat seiring waktu karena pengaruh gravitasi bulan.
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="btn-group">
                            <a href="/siangmalam" class="col-4 text-center link-page">
                                <img src="{{ asset('web') }}/assets/btn/btn_siangmalam.png" class="img-fluid"
                                    width="200px" alt="">
                            </a>
                            <a href="/zonawaktu" class="col-4 text-center link-page">
                                <img src="{{ asset('web') }}/assets/btn/btn_zonawaktu.png" class="img-fluid"
                                    width="200px" alt="">
                            </a>
                            <a href="/arahangin" class="col-4 text-center link-page">
                                <img src="{{ asset('web') }}/assets/btn/btn_arahangin.png" class="img-fluid"
                                    width="200px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- Canvas for Particle Effect -->

    <!-- JavaScript -->
    <script src="{{ asset('web') }}/assets/js/loading.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
