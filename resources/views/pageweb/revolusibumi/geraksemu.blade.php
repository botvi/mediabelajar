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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/geraksemu.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Gerak Semu</title>

</head>

<body>

    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand link-page" href="/revolusibumi">
                <img src="{{ asset('web') }}/assets/btn/back.png" width="60" height="auto" />
            </a>
            <div class="navbar-brand text-start col">
                <div class="text-light">
                    <h2><span style="color: #ffffff;">Revolusi</span> <span style="color: rgb(246, 172, 26);">Bumi
                        </span>
                        <h4><span style="color: rgb(246, 172, 26);">Gerak Semu</span></h4>
                    </h2>
                </div>
            </div>
            <div class="navbar-brand ">
                <a class="text-light keterangan" href="#" data-bs-toggle="modal" data-bs-target="#ketModal">
                    <img src="{{ asset('web') }}/assets/btn/btn_ket.png" width="60px" alt="">
                </a>
            </div>

        </div>
    </nav>
    <!-- KET -->
    <div class="modal fade" id="ketModal" tabindex="-1" aria-labelledby="ketModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Gerak Semu </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"><p>Gerak semu adalah ilusi gerakan yang tampak dari Bumi karena pergerakan Bumi sendiri.</p>

                    <h2>Faktor Penyebab Gerak Semu</h2>
                    <p>Beberapa faktor yang menyebabkan gerak semu meliputi:</p>
                    <ul>
                        <li><strong>Rotasi Bumi:</strong> Rotasi Bumi menyebabkan matahari terbit dan tenggelam setiap hari, menciptakan sensasi gerakan Matahari di langit.</li>
                        <li><strong>Revolusi Bumi:</strong> Revolusi Bumi mengakibatkan perubahan posisi Matahari terhadap latar belakang bintang-bintang di langit, menciptakan gerakan semu matahari di sepanjang tahun.</li>
                        <li><strong>Rotasi Bulan:</strong> Rotasi Bulan menghasilkan gerakan Bulan di langit, seperti fase bulan dan gerakan Bulan di sepanjang malam.</li>
                        <li><strong>Pergerakan planet:</strong> Pergerakan planet di langit juga terlihat bergerak dalam posisi relatif terhadap bintang-bintang di latar belakang.</li>
                    </ul>
                    
                    <h2>Contoh Gerak Semu</h2>
                    <p>Contoh gerak semu meliputi:</p>
                    <ul>
                        <li><strong>Gerak harian Matahari:</strong> Terbit di timur dan tenggelam di barat karena rotasi Bumi.</li>
                        <li><strong>Perubahan posisi Matahari selama setahun:</strong> Gerak Matahari melalui 12 rasi zodiak karena revolusi Bumi mengelilingi Matahari.</li>
                        <li><strong>Fase Bulan:</strong> Gerakan Bulan mengelilingi Bumi dan fase bulan yang berubah.</li>
                        <li><strong>Pergerakan planet:</strong> Gerakan planet di langit yang berbeda-beda dari Bumi.</li>
                    </ul>
                    
                    <h2>Pengaruh Gerak Semu</h2>
                    <p>Pengetahuan tentang gerak semu penting dalam:</p>
                    <ul>
                        <li><strong>Navigasi:</strong> Membantu navigasi di darat dan laut dengan menggunakan bintang sebagai panduan.</li>
                        <li><strong>Astronomi:</strong> Memahami gerak semu membantu astronom untuk mengamati dan memprediksi pergerakan objek langit.</li>
                        <li><strong>Kalender:</strong> Menentukan waktu dan musim berdasarkan gerak semu Matahari dan Bulan.</li>
                    </ul>
                    
                    <h2>Kesimpulan</h2>
                    <p>Gerak semu adalah ilusi gerakan yang tampak dari Bumi akibat pergerakan Bumi sendiri dalam rotasi dan revolusinya. Pengetahuan tentang gerak semu penting dalam navigasi, astronomi, dan penentuan waktu dalam kehidupan sehari-hari.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <img src="{{ asset('web') }}/assets/gif/gif_geraksemu.gif" class="img-fluid musim" width="500px"
                    alt="">
            </div>
        </div>
    </div>


    </div>

    <!-- Canvas for Particle Effect -->
    <!-- <canvas id="particleCanvas"></canvas> -->

    <!-- JavaScript -->
    <script src="{{ asset('web') }}/assets/js/loading.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
