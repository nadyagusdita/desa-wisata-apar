<?php
ob_start();
include '../_config.php';
include '../templates/_sidebar.php';

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $tentang_wisata = $_POST['tentang_wisata'];
    $contact_person = htmlspecialchars($_POST['contact_person']);

    $query = "INSERT INTO paket_wisata VALUES ('', '$nama', '$tentang_wisata', '$contact_person')";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    if ($result > 0) {
        header("location: index.php?berhasil=yes");
    } else {
        header("location: index.php?berhasil=no");
    }
}
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
                        <h3>Paket Wisata</h3>
                        <p class="text-subtitle text-muted">Tambah Paket Wisata</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/paket-wisata">Paket Wisata</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Paket Wisata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="nama" class="mb-1">Nama Paket Wisata</label>
                                        <input class="form-control" type="text" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="tentang_wisata" class="mb-1">Tentang Wisata</label>
                                        <textarea class="ckeditor" id="ckeditor" name="tentang_wisata" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="contact_person" class="mb-1">Contact Person</label>
                                        <input class="form-control" type="text" id="contact_person" name="contact_person" required>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include '../templates/_footer.php' ?>