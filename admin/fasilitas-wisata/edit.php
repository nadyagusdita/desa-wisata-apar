<?php

include '../_config.php';

$id = $_GET['id'];

$sql   = mysqli_query($db, "SELECT * FROM fasilitas_wisata WHERE id_fasilitas_wisata = $id");
$data = mysqli_fetch_assoc($sql);

if (isset($_POST['submit'])) {
    $ukuranFile = $_FILES['gambar']['size'];

    if ($ukuranFile > 1044070) {
        $err = 1;
        $max = 'Ukuran gambar maksimal 1 MB';
    }
}
if (isset($_POST['submit']) && $err != 1) {
    $fasilitas = htmlspecialchars($_POST['fasilitas']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    $gambar = $data['gambar'];

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ($error === 4) {
        $query = "UPDATE fasilitas_wisata SET
                    fasilitas = '$fasilitas',
                    keterangan ='$keterangan',
                    gambar = '$gambar'
                    WHERE id_fasilitas_wisata = $id";
        $result = mysqli_query($db, $query);
    } else if (in_array($ekstensiGambar, $ekstensiGambarValid) === true) {
        if ($ukuranFile < 1044070) {
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.' . $ekstensiGambar;
            move_uploaded_file($tmpName, '../assets/img/fasilitas/' . $namaFileBaru);

            $query = "UPDATE fasilitas_wisata SET
                    fasilitas = '$fasilitas',
                    keterangan ='$keterangan',
                    gambar = '$namaFileBaru'
                    WHERE id_fasilitas_wisata = $id";
            $result = mysqli_query($db, $query);
        }
    }

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
                        <h3>Fasilitas Wisata</h3>
                        <p class="text-subtitle text-muted">Edit Fasilitas Wisata</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/fasilitas-wisata">Fasilitas Wisata</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Fasilitas Wisata</li>
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
                                        <label for="fasilitas" class="mb-1">Nama Fasilitas</label>
                                        <input class="form-control" type="text" id="fasilitas" name="fasilitas" value="<?= $data['fasilitas']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="keterangan" class="mb-1">Keterangan Singkat</label>
                                        <input class="form-control" type="text" id="keterangan" name="keterangan" value="<?= $data['keterangan']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row form-group mb-3">
                                        <div class="col-2">
                                            <img src="../assets/img/fasilitas/<?= $data['gambar']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-10">
                                            <label for="gambar" class="mb-1">Masukkan Gambar Fasilitas</label>
                                            <input class="form-control" type="file" id="gambar" name="gambar">
                                            <?php if (isset($err)) echo "<p class='text-danger'> $max</p>" ?>
                                        </div>
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