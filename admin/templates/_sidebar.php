<?php
include '_header.php';
?>

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <a href="index.html"><img src="../../assets/img/pariaman.png" alt="Logo" style="width: 80px; height: 80px;"></a>
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