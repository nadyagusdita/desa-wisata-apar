<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('location: ../login.php');
    exit;
}

require_once '_config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Website Desa Wisata Apar</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link rel="shortcut icon" href="../assets/img/pariaman.png" type="image/x-icon">
</head>

<body>

    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <a href="index.html"><img src="../assets/img/pariaman.png" alt="Logo" style="width: 80px; height: 80px;"></a>
                        <p style="font-size: 18px;" class="mt-4">Desa Wisata Apar</p>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/profil" class='sidebar-link'>
                                <i class="bi bi-diagram-3-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?= BASEURL ?>/paket-wisata" class='sidebar-link'>
                                <i class="bi bi-file-earmark-richtext"></i>
                                <span>Paket Wisata</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/fasilitas-wisata" class='sidebar-link'>
                                <i class="bi bi-hand-thumbs-up"></i>
                                <span>Fasilitas Wisata</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/berita" class='sidebar-link'>
                                <i class="bi bi-newspaper"></i>
                                <span>Berita</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-images"></i>
                                <span>Galeri</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="<?= BASEURL; ?>/galeri-foto">Foto</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="<?= BASEURL; ?>/galeri-video">Video</a>
                                </li>
                            </ul>
                        </li>

                        <br>
                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/kelola-akun" class='sidebar-link'>
                                <i class="bi bi-person-workspace"></i>
                                <span>Kelola Akun</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/../index.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-left"></i>
                                <span>Ke Halaman Utama</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= BASEURL; ?>/logout.php" class='sidebar-link'>
                                <i class="bi bi-door-closed"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Selamat Datang!</h3>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Admin Website Desa Wisata Apar</h4>
                                    </div>
                                    <div class="card-body">
                                        <img src="../assets/img/pariaman.png" alt="Pariaman">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; DESA WISATA APAR</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>