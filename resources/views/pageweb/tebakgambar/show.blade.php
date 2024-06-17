<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tebak Gambar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/ujikom.css">
<style>
    .btn-mulai img {
  transition: transform 0.3s ease;
}

.btn-mulai img:hover {
  transform: scale(1.1);
}
.bg-container {
        position: relative;
        background-image: url('{{ asset('web') }}/assets/img/bg-tebakgambar.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 0;
    }
    
    .bg-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); /* Adjust the opacity to make it darker or lighter */
        z-index: 1;
    }
    
    .bg-container > .row,
    .bg-container > .d-flex {
        position: relative;
        z-index: 2;
    }
</style>
</head>

<body>


    <div class="app container bg-container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="mb-4"><span style="color: #ffffff;">TEBAK </span> <span style="color: rgb(246, 172, 26);">GAMBAR
                </span> <span class="infotitle" href="#" data-bs-toggle="modal" data-bs-target="#infoModal">
                    <img src="{{ asset('web') }}/assets/btn/about.png" width="25px" alt=""></span>
                </h1>
            </div>
            <div class="col-auto">
                <a href="/" class="link-page back-btn">
                    <img src="{{ asset('web') }}/assets/btn/close_2.png" width="60" height="auto" />
                </a>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50vh;">
            <a href="/leaderboardtebakgambar" class="text-center link-page btn-mulai mb-3">
                <img src="{{ asset('web') }}/assets/btn/btn_leaderboard.png" class="img-fluid" width="200px" alt="Leaderboard">
            </a>
            <a href="/starttebakgambar" class="text-center link-page btn-mulai">
                <img src="{{ asset('web') }}/assets/btn/btn_mulai.png" class="img-fluid" width="300px" alt="Mulai">
            </a>
        </div>
    </div>

    <!-- INFO -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Tebak gambar </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"> <h1>Penjelasan Permainan Tebak Gambar</h1>

                    <p>Permainan tebak gambar ini adalah:</p>
                
                    <ul>
                        <li>Objektif: Menebak identitas gambar yang ditampilkan dengan secepat mungkin.</li>
                        <li>Skor: Diukur berdasarkan waktu yang dibutuhkan untuk menebak gambar dengan benar.</li>
                        <li>Waktu Penyelesaian: Semakin cepat menjawab, semakin tinggi skor yang dicapai.</li>
                    </ul>
                
                    <p>Permainan ini dirancang untuk menguji ketajaman pemikiran cepat dan pengenalan objek, serta memotivasi pemain untuk mencapai waktu penyelesaian yang lebih baik.</p>
                
                    <p>Menyenangkan dan menantang, permainan tebak gambar juga sering digunakan sebagai sarana hiburan edukatif.</p>
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
   
</body>

</html>
