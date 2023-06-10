<?php

include '../_config.php';

$id = $_GET['id'];

$sql   = mysqli_query($db, "SELECT * FROM video WHERE id_video = $id");
$data = mysqli_fetch_assoc($sql);

if (isset($_POST['submit'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $link = htmlspecialchars($_POST['link']);
    $tanggal_upload = date("Y-m-d");

    $query = "UPDATE video SET
                judul = '$judul',
                link = '$link'
                WHERE id_video = $id";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    if ($result > 0) {
        header("location: index.php?berhasil=yes");
    } else {
        header("location: index.php?berhasil=no");
    }
}
?>

<div id="app">
    <?php include '../templates/_sidebar.php' ?>

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
                        <h3>Galeri Video</h3>
                        <p class="text-subtitle text-muted">Tambah Video</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/galeri-video">Video</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Video</li>
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
                                        <label for="judul" class="mb-1">Judul Video</label>
                                        <input class="form-control" type="text" id="judul" name="judul" required value="<?= $data['judul']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="link" class="mb-1">Link Video</label>
                                        <input class="form-control" type="text" id="link" name="link" required value="<?= $data['link']; ?>">
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