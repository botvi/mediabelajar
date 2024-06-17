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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/arahangin.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Arah Angin</title>

</head>

<body>

    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand link-page" href="/rotasibumi">
                <img src="{{ asset('web') }}/assets/btn/back.png" width="60" height="auto" />
            </a>
            <div class="navbar-brand text-start col">
                <div class="text-light">
                    <h2><span style="color: #ffffff;">Rotasi</span> <span style="color: rgb(246, 172, 26);">Bumi
                        </span>
                        <h4><span style="color: rgb(246, 172, 26);">Arah Angin</span></h4>
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
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Arah Angin </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"><p>Arah angin adalah arah dari mana angin berasal. Ini biasanya dinyatakan dalam derajat dari utara sejati (misalnya, angin barat daya berasal dari 225 derajat) atau dalam nama-nama arah mata angin (misalnya, angin barat daya).</p>

                    <h2>Faktor yang Mempengaruhi Arah Angin</h2>
                    <ul>
                        <li><strong>Tekanan Atmosfer:</strong> Angin bergerak dari daerah bertekanan tinggi ke daerah bertekanan rendah.</li>
                        <li><strong>Rotasi Bumi:</strong> Rotasi bumi menyebabkan efek Coriolis yang mengubah arah angin.</li>
                        <li><strong>Topografi:</strong> Pegunungan dan lembah dapat mengarahkan dan mempercepat angin.</li>
                        <li><strong>Pemanasan Matahari:</strong> Pemanasan yang tidak merata dari permukaan bumi menyebabkan perbedaan tekanan yang memicu angin.</li>
                    </ul>
                    
                    <h2>Jenis-Jenis Angin</h2>
                    <ul>
                        <li><strong>Angin Lokal:</strong> Angin yang terbentuk akibat perbedaan suhu lokal, seperti angin darat dan angin laut.</li>
                        <li><strong>Angin Muson:</strong> Angin periodik yang berubah arah setiap enam bulan, membawa musim hujan dan musim kemarau di beberapa wilayah.</li>
                        <li><strong>Angin Pasat:</strong> Angin tetap yang bertiup dari daerah subtropis bertekanan tinggi menuju khatulistiwa.</li>
                    </ul>
                    
                    <h2>Pengukuran Arah Angin</h2>
                    <p>Arah angin diukur menggunakan alat yang disebut anemometer dan wind vane (penunjuk arah angin). Anemometer mengukur kecepatan angin, sedangkan wind vane menunjukkan arah dari mana angin bertiup.</p>
                    
                    <h2>Pentingnya Mengetahui Arah Angin</h2>
                    <ul>
                        <li><strong>Pertanian:</strong> Membantu petani menentukan waktu yang tepat untuk menanam dan menghindari penyebaran hama.</li>
                        <li><strong>Penerbangan:</strong> Pilot perlu mengetahui arah angin untuk lepas landas dan mendarat dengan aman.</li>
                        <li><strong>Maritim:</strong> Kapal menggunakan arah angin untuk navigasi.</li>
                        <li><strong>Kesehatan:</strong> Memantau arah angin penting untuk memahami penyebaran polutan udara dan penyakit.</li>
                    </ul>
                    
                    <h2>Kesimpulan</h2>
                    <p>Memahami arah angin dan faktor-faktor yang mempengaruhinya sangat penting untuk berbagai bidang, termasuk pertanian, penerbangan, maritim, dan kesehatan. Arah angin yang tepat dapat membantu kita merencanakan dan mengambil keputusan yang lebih baik dalam aktivitas sehari-hari.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <img src="{{ asset('web') }}/assets/gif/gif_arahangin.gif" class="img-fluid" width="500px"
                    alt="">
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
