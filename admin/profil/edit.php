<?php

include '../_config.php';

$query   = mysqli_query($db, "SELECT * FROM profil_desa");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $ukuranFile = $_FILES['gambar']['size'];

    if ($ukuranFile > 1044070) {
        $err = 1;
        $max = 'Ukuran gambar maksimal 1 MB';
    }
}
if (isset($_POST['submit']) && $err != 1) {
    $tentang_kami = $_POST['tentang_kami'];
    $gambar = $data['struktur_organisasi'];
    $sejarah = $_POST['sejarah'];

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ($error === 4) {
        $query = "UPDATE profil_desa SET
                    tentang_kami = '$tentang_kami',
                    sejarah ='$sejarah',
                    struktur_organisasi = '$gambar'";
        $result = mysqli_query($db, $query);
    } else if (in_array($ekstensiGambar, $ekstensiGambarValid) === true) {
        if ($ukuranFile < 1044070) {
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.' . $ekstensiGambar;
            move_uploaded_file($tmpName, '../assets/img/profil/' . $namaFileBaru);

            $query = "UPDATE profil_desa SET
                    tentang_kami = '$tentang_kami',
                    sejarah ='$sejarah',
                    struktur_organisasi = '$namaFileBaru'";
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
                        <h3>Profil</h3>
                        <p class="text-subtitle text-muted">Edit Profil</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/profil">Profil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
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
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="tentang_kami" class="mb-1">Tentang Kami</label>
                                        <textarea class="ckeditor" id="ckeditor" name="tentang_kami"><?= $data['tentang_kami']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row form-group mb-3">
                                        <div class="col-2">
                                            <img src="../assets/img/profil/<?= $data['struktur_organisasi']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-10">
                                            <label for="gambar" class="mb-1">Masukkan Gambar Struktur Organisasi</label>
                                            <input class="form-control" type="file" id="gambar" name="gambar">
                                            <?php if (isset($err)) echo "<p class='text-danger'> $max</p>" ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="sejarah" class="mb-1">Sejarah</label>
                                        <textarea class="ckeditor" id="ckeditor" name="sejarah"><?= $data['sejarah']; ?></textarea>
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