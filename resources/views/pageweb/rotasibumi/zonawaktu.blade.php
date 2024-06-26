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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/zonawaktu.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <style>
        .zoom-container {
            position: relative;
            overflow: hidden;
        }

        .zoom-container img {
            transition: transform 0.3s ease;
            cursor: zoom-in;
        }

        .zoom-container.zoomed img {
            cursor: zoom-out;
        }
    </style>
    <title>Zona Waktu</title>

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
                        <h4><span style="color: rgb(246, 172, 26);">Zona Waktu</span></h4>
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
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Zona Waktu </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"> <h1>Konversi Waktu GMT ke Waktu Indonesia</h1>
    
                    <h2>Penjelasan Zona Waktu</h2>
                    <p>Zona waktu adalah pembagian wilayah di permukaan Bumi yang memiliki waktu standar yang sama. Pembagian ini dibuat untuk menyesuaikan waktu dengan posisi Matahari di langit, sehingga aktivitas manusia dapat berjalan dengan lebih teratur dan efisien. Dunia dibagi menjadi 24 zona waktu, masing-masing berbeda satu jam dari GMT (Greenwich Mean Time). Di Indonesia, terdapat tiga zona waktu utama:</p>
                    
                    <h2>Zona Waktu di Indonesia</h2>
                    <table>
                        <tr>
                            <th>Zona Waktu</th>
                            <th>GMT</th>
                            <th>Wilayah</th>
                            <th>Contoh Kota</th>
                            <th>Contoh Penggunaan GMT</th>
                        </tr>
                        <tr>
                            <td>Waktu Indonesia Barat (WIB)</td>
                            <td>GMT+7</td>
                            <td>Sumatera, Jawa, Kalimantan Barat</td>
                            <td>Jakarta, Bandung, Medan</td>
                            <td>Jika waktu di Jakarta 14:00 WIB, maka waktu di Greenwich 07:00 GMT</td>
                        </tr>
                        <tr>
                            <td>Waktu Indonesia Tengah (WITA)</td>
                            <td>GMT+8</td>
                            <td>Kalimantan Tengah, Kalimantan Selatan, Bali, Nusa Tenggara Barat, Nusa Tenggara Timur</td>
                            <td>Denpasar, Makassar, Mataram</td>
                            <td>Jika waktu di Denpasar 14:00 WITA, maka waktu di Greenwich 06:00 GMT</td>
                        </tr>
                        <tr>
                            <td>Waktu Indonesia Timur (WIT)</td>
                            <td>GMT+9</td>
                            <td>Maluku, Papua</td>
                            <td>Jayapura, Ambon, Sorong</td>
                            <td>Jika waktu di Jayapura 14:00 WIT, maka waktu di Greenwich 05:00 GMT</td>
                        </tr>
                    </table>
                    
                    <h2>Contoh Pengaplikasian GMT di Indonesia</h2>
                    <p>Misalkan ada rapat internasional yang dijadwalkan pada 12:00 GMT:</p>
                    <table>
                        <tr>
                            <th>Kota</th>
                            <th>Zona Waktu</th>
                            <th>Waktu Rapat</th>
                        </tr>
                        <tr>
                            <td>Jakarta</td>
                            <td>WIB (GMT+7)</td>
                            <td>19:00 WIB</td>
                        </tr>
                        <tr>
                            <td>Denpasar</td>
                            <td>WITA (GMT+8)</td>
                            <td>20:00 WITA</td>
                        </tr>
                        <tr>
                            <td>Jayapura</td>
                            <td>WIT (GMT+9)</td>
                            <td>21:00 WIT</td>
                        </tr>
                    </table>
                    
                    <h2>Kesimpulan</h2>
                    <p>Dengan mengetahui perbedaan waktu antara GMT dan zona waktu di Indonesia (WIB, WITA, dan WIT), kita dapat dengan mudah mengatur dan mengoordinasikan berbagai kegiatan internasional.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-12 mb-3 text-center text-light">
                <h5>Klik bagian yang ingin kamu lihat untuk Zoom !</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <div class="zoom-container">
                    <img id="zoom-image" src="{{ asset('web') }}/assets/gif/flatworld.png" class="img-fluid"
                        width="900px" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('web') }}/assets/js/loading.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const zoomContainer = document.querySelector('.zoom-container');
            const zoomImage = document.getElementById('zoom-image');
            let isZoomed = false;
            let originX = 0;
            let originY = 0;

            zoomContainer.addEventListener('click', function(e) {
                if (!isZoomed) {
                    const rect = zoomImage.getBoundingClientRect();
                    const offsetX = e.clientX - rect.left;
                    const offsetY = e.clientY - rect.top;
                    originX = offsetX / rect.width * 100;
                    originY = offsetY / rect.height * 100;
                    zoomImage.style.transformOrigin = `${originX}% ${originY}%`;
                    zoomImage.style.transform = "scale(2)";
                    zoomContainer.classList.add('zoomed');
                    isZoomed = true;
                } else {
                    zoomImage.style.transform = "scale(1)";
                    zoomContainer.classList.remove('zoomed');
                    isZoomed = false;
                }
            });
        });
    </script>

</body>

</html>
