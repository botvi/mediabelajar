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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/siangmalam.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Siang dan Malam</title>

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
                        <h4><span style="color: rgb(246, 172, 26);">Siang
                                dan
                                malam</span></h4>
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
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Siang dan malam </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"><p>Siang dan malam adalah dua periode utama dalam siklus harian Bumi yang disebabkan oleh rotasi Bumi terhadap sumbunya.</p>

                    <h2>Penyebab Siang dan Malam</h2>
                    <ul>
                        <li><strong>Rotasi Bumi:</strong> Bumi berputar mengelilingi sumbunya dalam waktu sekitar 24 jam.</li>
                        <li><strong>Perbedaan Pencahayaan:</strong> Selama rotasi, Bumi menghadap Matahari dan mengalami siang ketika terkena sinar Matahari secara langsung.</li>
                        <li><strong>Bola Bumi:</strong> Bola Bumi memungkinkan hanya separuhnya yang diterangi oleh Matahari pada satu waktu, sementara yang lainnya dalam kegelapan relatif.</li>
                    </ul>
                    
                    <h2>Perbedaan Antara Siang dan Malam</h2>
                    <ul>
                        <li><strong>Siang:</strong> Waktu ketika bagian Bumi menghadap Matahari dan menerima cahayanya secara langsung.</li>
                        <li><strong>Malan:</strong> Waktu ketika bagian Bumi menghadap jauh dari Matahari dan berada dalam kegelapan.</li>
                    </ul>
                    
                    <h2>Pengaruh Siang dan Malam</h2>
                    <p>Periode siang dan malam mempengaruhi berbagai aspek kehidupan di Bumi:</p>
                    <ul>
                        <li><strong>Pertumbuhan Tanaman:</strong> Tanaman memerlukan sinar Matahari untuk fotosintesis, yang terjadi selama siang hari.</li>
                        <li><strong>Perilaku Hewan:</strong> Banyak hewan aktif selama siang hari (hewan diurnal) atau malam hari (hewan nokturnal).</li>
                        <li><strong>Aktivitas Manusia:</strong> Manusia beraktivitas dan beristirahat sesuai dengan siklus siang dan malam.</li>
                    </ul>
                    
                    <h2>Kesimpulan</h2>
                    <p>Siang dan malam adalah bagian alami dari siklus hidup Bumi yang diatur oleh rotasi Bumi terhadap Matahari. Pengetahuan tentang siang dan malam membantu kita dalam berbagai aspek kehidupan sehari-hari, termasuk pertanian, perilaku hewan, dan aktivitas manusia.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <img src="{{ asset('web') }}/assets/gif/gif_siangmalam.gif" class="img-fluid" width="800px"
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
