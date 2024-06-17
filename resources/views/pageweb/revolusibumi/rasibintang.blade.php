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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/rasibintang.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Rasi Bintang</title>

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
                        <h4><span style="color: rgb(246, 172, 26);">Rasi Bintang</span></h4>
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
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Rasi Bintang </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"><p>Rasi bintang adalah pola-pola bintang yang membentuk gambar atau figur tertentu di langit. Rasi bintang digunakan untuk membantu navigasi dan identifikasi bintang-bintang di langit.</p>

                    <h2>Penyusunan Rasi Bintang</h2>
                    <p>Rasi bintang tidak memiliki hubungan fisik yang nyata dengan bintang-bintang yang membentuknya. Mereka hanyalah pola yang terlihat ketika garis-garis imajiner ditarik antara bintang-bintang yang tampak berdekatan di langit.</p>
                    
                    <h2>Jenis-Jenis Rasi Bintang</h2>
                    <p>Ada dua jenis rasi bintang utama:</p>
                    <ul>
                        <li><strong>Rasi Bintang Menurut Persegi Tiga:</strong> Rasi bintang tradisional yang memiliki bentuk figur, misalnya Orion dan Leo.</li>
                        <li><strong>Rasi Bintang Modern:</strong> Rasi bintang yang dibentuk berdasarkan garis-garis imajiner yang menghubungkan bintang-bintang untuk membentuk pola tertentu.</li>
                    </ul>
                    
                    <h2>Penggunaan Rasi Bintang</h2>
                    <p>Rasi bintang memiliki berbagai kegunaan:</p>
                    <ul>
                        <li><strong>Navigasi:</strong> Rasi bintang digunakan sebagai panduan navigasi, terutama sebelum era GPS.</li>
                        <li><strong>Kalender:</strong> Beberapa budaya menggunakan gerak bintang-bintang dan rasi bintang untuk menentukan musim tanam atau perayaan budaya.</li>
                        <li><strong>Astronomi:</strong> Rasi bintang membantu astronom dalam mengidentifikasi dan mengamati benda langit tertentu.</li>
                    </ul>
                    
                    <h2>Kesimpulan</h2>
                    <p>Rasi bintang adalah pola-pola bintang yang membentuk gambar atau figur di langit. Mereka membantu dalam navigasi, kalender budaya, dan astronomi, serta menjadi bagian dari warisan budaya dan pengetahuan manusia tentang langit dan alam semesta.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <!-- Display Planets Horizontally -->
                <div class="bintang-container">
                    <a class="bintang" id="leo">
                        <img src="{{ asset('web') }}/assets/bintang/leo.png" alt="leo" />
                    </a>
                    <a class="bintang" id="virgo">
                        <img src="{{ asset('web') }}/assets/bintang/virgo.png" alt="virgo" />
                    </a>
                    <a class="bintang" id="libra">
                        <img src="{{ asset('web') }}/assets/bintang/libra.png" alt="libra" />
                    </a>
                    <a class="bintang" id="scorpio">
                        <img src="{{ asset('web') }}/assets/bintang/scorpio.png" alt="scorpio" />
                    </a>
                    <a class="bintang" id="sagitarius">
                        <img src="{{ asset('web') }}/assets/bintang/sagitarius.png" alt="sagitarius" />
                    </a>
                    <a class="bintang" id="capricorn">
                        <img src="{{ asset('web') }}/assets/bintang/capricorn.png" alt="capricorn" />
                    </a>
                    <a class="bintang" id="aquarius">
                        <img src="{{ asset('web') }}/assets/bintang/aquarius.png" alt="aquarius" />
                    </a>
                    <a class="bintang" id="pisces">
                        <img src="{{ asset('web') }}/assets/bintang/pisces.png" alt="pisces" />
                    </a>
                    <a class="bintang" id="aries">
                        <img src="{{ asset('web') }}/assets/bintang/aries.png" alt="aries" />
                    </a>
                    <a class="bintang" id="taurus">
                        <img src="{{ asset('web') }}/assets/bintang/taurus.png" alt="taurus" />
                    </a>
                    <a class="bintang" id="gemini">
                        <img src="{{ asset('web') }}/assets/bintang/gemini.png" alt="gemini" />
                    </a>
                    <a class="bintang" id="cancer">
                        <img src="{{ asset('web') }}/assets/bintang/cancer.png" alt="cancer" />
                    </a>

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
