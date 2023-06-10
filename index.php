<?php
include 'admin/_config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Apar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/img/pariaman.png">
</head>

<body style="overflow-x:hidden">
    <div class="container-lg">
        <nav class="navbar navbar-expand-lg navbar-dark bg-none px-4 mx-md-0">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/pariaman.png" alt="" width="60" class="d-inline-block align-text-middle pe-2">Desa Wisata Apar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active px-3" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-3" href="paket-wisata.php">Paket Wisata</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-3" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="galeri-foto.php">Foto</a></li>
                            <li><a class="dropdown-item" href="video.php">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-3" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <header class="text-center">
        <h1>
            Explore New Places
            <br>
            In Desa Wisata Apar
        </h1>
        <p class="mt-3">
            Discover new experiences with us
        </p>
        <a href="paket-wisata.php" class="btn btn-get-started px-4 py-2 mt-4">Get Started</a>
    </header>

    <section class="section-paket-wisata" id="paketWisata">
        <div class="container">
            <div class="row">
                <div class="col section-paket-wisata-heading text-center">
                    <h2>Paket Wisata</h2>
                    <p>
                        Something that you never try
                        <br>
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-paket-wisata-content" id="paketWisataContent">
        <div class="container">
            <div class="row section-paket-wisata-card justify-content-center">

                <?php
                $query   = $db->query("SELECT * FROM paket_wisata
                LEFT JOIN gambar_paket_wisata ON paket_wisata.id_paket_wisata = gambar_paket_wisata.id_paket_wisata GROUP BY paket_wisata.id_paket_wisata LIMIT 4");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-paket-wisata text-center d-flex flex-column mt-3" style="background-image: url(admin/assets/img/paket-wisata/<?= $data['gambar']; ?>);">
                            <div class="title-paket"><?= $data['nama']; ?></div>
                            <div class="paket-wisata-button mt-auto">
                                <a href="detail-paket.php?id=<?= $data["id_paket_wisata"]; ?>" class="btn btn-paket-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <section class="section-fasilitas" id="fasilitas">
        <div class="container">
            <div class="row">
                <div class="col section-fasilitas-heading text-center">
                    <h2>Fasilitas Wisata</h2>
                    <p>
                        Visit us and you will
                        <br>
                        get all these benefits
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-fasilitas-content" id="fasilitasContent">
        <div class="container">
            <div class="row benefits justify-content-center">

                <?php
                $query   = $db->query("SELECT * FROM fasilitas_wisata");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-md-3 mt-md-0 mb-5">
                        <div class="rectangle mx-auto px-1">
                            <img src="admin/assets/img/fasilitas/<?= $data['gambar']; ?>" alt="100x100" class="img-fluid d-block mx-auto rounded-circle" width="100" height="100" style="object-fit: cover;">
                            <div class="headline-benefit">
                                <?= $data['fasilitas']; ?>
                            </div>
                            <div class="subheadline-benefit mt-2 px-3">
                                <?= $data['keterangan']; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="section-berita" id="berita">
        <div class="container">
            <div class="row">
                <div class="col section-berita-heading text-center">
                    <h2>Berita Terbaru</h2>
                    <p>
                        Baca berita terbaru
                        <br>
                        untuk mengetahui kejadian terkini
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="card-berita" id="beritaContent">
        <div class="container mt-5">
            <div class="row justify-content-center">

                <?php
                $query   = $db->query("SELECT * FROM berita ORDER BY tanggal_upload DESC LIMIT 3");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card shadow-sm p-2">
                            <img src="admin/assets/img/berita/<?= $data['gambar']; ?>" class="card-img-top" style="object-fit:cover; height:200px" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $data['judul']; ?>
                                </h5>
                                <p class="card-text">
                                    <?= strip_tags(substr($data['isi'], 0, 150)); ?>...
                                </p>
                                <p class="card-text">
                                    <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                    </small>
                                </p>
                                <div class="btn-selengkapnya text-center">
                                    <a href="detail-berita.php?id=<?= $data['id_berita']; ?>" class="btn px-3 py-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <div class="section-video" id="video">
        <div class="container">
            <div class="row">
                <div class="col section-video-heading text-center">
                    <h2>Video</h2>
                    <p>
                        Lihat video terbaru
                        <br>
                        untuk mengetahui momen terkini
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="card-video" id="videoContent">
        <div class="container mt-5">
            <div class="row justify-content-center">

                <?php
                $query   = $db->query("SELECT * FROM video ORDER BY tanggal_upload DESC LIMIT 2 ");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4 mb-lg-0">
                        <div class="card shadow-sm p-2">
                            <iframe height="300" src="http://www.youtube.com/embed/<?= substr($data['link'], -11); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: inherit;"></iframe>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $data['judul']; ?>
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>
        </div>
    </section>

    <div class="section-galeri" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col section-galeri-heading text-center">
                    <h2>Galeri Foto</h2>
                    <p>
                        Lihat galeri terbaru
                        <br>
                        untuk mengetahui momen terkini
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="card-galeri" id="galeriContent">
        <div class="container mt-5">
            <div class="row justify-content-center" style="margin-bottom: 140px;">

                <?php
                $query   = $db->query("SELECT * FROM galeri_foto
                LEFT JOIN detail_galeri_foto ON galeri_foto.id_galeri_foto = detail_galeri_foto.id_galeri_foto GROUP BY galeri_foto.id_galeri_foto ORDER BY galeri_foto.tanggal_upload DESC LIMIT 3");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card shadow-sm p-2">
                            <img src="admin/assets/img/galeri-foto/<?= $data['gambar']; ?>" class="card-img-top" style="object-fit:cover; height:200px" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $data['judul']; ?>
                                </h5>
                                <p class="card-text">
                                    <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                    </small>
                                </p>
                                <div class="btn-selengkapnya text-center">
                                    <a href="detail-galeri.php?id=<?= $data['id_galeri_foto']; ?>" class="btn px-3 py-2">Lihat Galeri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>
        </div>
    </section>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-4">
                    <img src="assets/img/pariaman.png" width="80" alt="" />
                    <div class="text-muted mt-3">
                        &copy; 2022 Desa Apar <br />
                        Jl. Siti Manggopoh, Apar, Pariaman Utara, Kota Pariaman, Sumatera Barat 25522
                    </div>
                    <div class="medsos mt-3 mb-4 mb-lg-0">
                        <a href="https://web.facebook.com/people/Desa-Wisata-Apar/100063746363049/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/desa_wisata_apar/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCd8fWoT2-98OM3tEw9hWxpw"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 text-end">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.404230011465!2d100.0949349918517!3d-0.597937466999036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e29b0b535067%3A0xa3a557f262e4354f!2sApar%2C%20Kec.%20Pariaman%20Utara%2C%20Kota%20Pariaman%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1659871551424!5m2!1sid!2sid" width="700" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: inherit;"></iframe>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    Made by KKN UNAND Desa Apar &copy; 2022
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="assets/frontend/theme2/jquery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

    <script>
        var splide = new Splide('.splide', {
            perPage: 4,
            rewind: true,
        });

        splide.mount();
    </script>
</body>

</html>