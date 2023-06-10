<?php

include '../_config.php';
include '../templates/_sidebar.php';

$query   = mysqli_query($db, "SELECT * FROM profil_desa");
$data = mysqli_fetch_assoc($query);

?>

<div id="app">

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">

                <div class="row">
                    <div class="col-6 order-md-1 order-last">
                        <h3>Profil</h3>
                        <p class="text-subtitle text-muted">Kelola Profil</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            </ol>
                        </nav>
                    </div>

                </div>

                <a href="edit.php" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> Edit Profil</a>

                <div class="col-4 mt-2">
                    <?php if (isset($_GET['berhasil']) == 'yes') : ?>
                        <div class="alert alert-success alert-dismissible show fade">
                            Berhasil.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif (isset($_GET['berhasil']) == 'no') : ?>
                        <div class="alert alert-failed alert-dismissible show fade">
                            Gagal.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="tentang_kami" class="mb-1">Tentang Kami</label>
                                        <textarea class="ckeditor" id="ckeditor" name="tentang_kami" disabled><?= $data['tentang_kami']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="gambar" class="mb-1">Struktur Organisasi</label><br>
                                        <img src="../assets/img/profil/<?= $data['struktur_organisasi']; ?>" class="img-thumbnail">
                                        <!-- <label for="gambar" class="mb-1">Masukkan Gambar Struktur Organisasi</label>
                                        <input class="form-control" type="file" id="gambar" name="gambar" required>
                                        <?php if (isset($err)) echo "<p class='text-danger'> $max</p>" ?> -->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="sejarah" class="mb-1">Sejarah</label>
                                        <textarea class="ckeditor" id="ckeditor" name="sejarah" disabled><?= $data['sejarah']; ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include '../templates/_footer.php' ?>