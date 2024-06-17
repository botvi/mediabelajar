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
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/musim.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Musim</title>

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
                        <h4><span style="color: rgb(246, 172, 26);">Musim</span></h4>
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
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Musim </span>
                    </h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body"><p>Musim adalah periode tertentu dalam setahun yang ditandai oleh kondisi cuaca dan iklim yang khas, seperti suhu udara, curah hujan, dan durasi siang dan malam.</p>

                    <h2>Faktor yang Mempengaruhi Musim</h2>
                    <ul>
                        <li><strong>Rotasi Bumi:</strong> Rotasi Bumi menghasilkan siklus harian dan tahunan yang mempengaruhi musim.</li>
                        <li><strong>Aksis Bumi:</strong> Kemiringan sumbu Bumi menyebabkan perbedaan intensitas sinar Matahari yang mencapai permukaan Bumi selama setahun.</li>
                        <li><strong>Orbit Bumi:</strong> Orbit elips Bumi mengakibatkan perubahan jarak Bumi dari Matahari, meskipun bukan faktor utama dalam musim.</li>
                    </ul>
                    
                    <h2>Jenis Musim</h2>
                    <p>Ada empat musim utama yang umum di sebagian besar wilayah Bumi:</p>
                    <ul>
                        <li><strong>Musim Semi:</strong> Ditandai dengan cuaca yang mulai hangat setelah musim dingin, tanaman mulai bersemi kembali.</li>
                        <li><strong>Musim Panas:</strong> Musim dengan suhu yang paling panas, biasanya diikuti dengan cuaca cerah dan lebih sedikit hujan.</li>
                        <li><strong>Musim Gugur:</strong> Warna-warni daun berubah saat pohon menggugurkan daunnya, cuaca menjadi lebih sejuk.</li>
                        <li><strong>Musim Dingin:</strong> Musim dengan suhu terdingin, biasanya disertai salju di daerah beriklim sedang hingga dingin.</li>
                    </ul>
                    
                    <h2>Pengaruh Musim</h2>
                    <p>Musim mempengaruhi berbagai aspek kehidupan di Bumi:</p>
                    <ul>
                        <li><strong>Pertanian:</strong> Musim memengaruhi masa tanam dan panen tanaman.</li>
                        <li><strong>Perilaku Hewan:</strong> Migrasi dan reproduksi hewan sering kali terjadi pada musim tertentu.</li>
                        <li><strong>Kehidupan Sehari-hari:</strong> Aktivitas manusia, pakaian, dan kebutuhan energi sering disesuaikan dengan musim.</li>
                    </ul>
                    
                    <h2>Kesimpulan</h2>
                    <p>Musim adalah hasil dari interaksi kompleks antara rotasi Bumi, kemiringan sumbu Bumi, dan orbit Bumi mengelilingi Matahari. Memahami musim membantu kita merencanakan kegiatan dan mengadaptasi diri terhadap perubahan iklim secara efektif.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- KET -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <img src="{{ asset('web') }}/assets/img/rev_musim.png" class="img-fluid musim" width="900px"
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
