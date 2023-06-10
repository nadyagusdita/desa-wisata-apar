<?php
include('../_config.php');

$id = $_GET['id'];

$query   = $db->query("SELECT * FROM galeri_foto
INNER JOIN detail_galeri_foto ON galeri_foto.id_galeri_foto = detail_galeri_foto.id_galeri_foto
WHERE galeri_foto.id_galeri_foto = '$id'");

if (isset($_POST['submit'])) {
    $ukuranFile = $_FILES['gambar']['size'];

    if ($ukuranFile > 1044070) {
        $err = 1;
        $max = 'Ukuran gambar maksimal 1 MB';
    }
}
if (isset($_POST['submit']) && $err != 1) {
    $subjudul = $_POST['subjudul'];
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (in_array($ekstensiGambar, $ekstensiGambarValid) === true) {
        if ($ukuranFile < 1044070) {
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.' . $ekstensiGambar;
            move_uploaded_file($tmpName, '../assets/img/galeri-foto/' . $namaFileBaru);

            $query = "INSERT INTO detail_galeri_foto VALUES ('', '$id', '$namaFileBaru', '$subjudul')";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
        }
    }

    if ($result > 0) {
        header("location: detail.php?berhasil=yes&id=$id");
    } else {
        header("location: detail.php?berhasil=no&id=$id");
    }
}

if (isset($_GET['id_gambar'])) {
    $id_galeri = $_GET['id_galeri'];
    $id_gambar = $_GET['id_gambar'];

    $sql   = mysqli_query($db, "SELECT * FROM detail_galeri_foto WHERE id_detail_gf = $id_gambar");
    $data = mysqli_fetch_assoc($sql);

    $statement = $db->prepare("DELETE FROM detail_galeri_foto WHERE id_detail_gf = ?");
    $statement->bind_param('i', $id_gambar);
    $statement->execute();

    if ($statement > 0) {
        unlink('../assets/img/galeri-foto/' .  $data['gambar']);
        header("location: detail.php?berhasil=yes&id=$id_galeri");
    } else {
        header("location: detail.php?berhasil=no&id=$id_galeri");
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
                        <h3>Gambar Galeri Foto</h3>
                        <p class="text-subtitle text-muted">Kelola Gambar Galeri Foto</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/galeri-foto">Galeri Foto</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gambar Galeri Foto</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
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
        </div>

        <section class="section">
            <div class="row">
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="../assets/img/galeri-foto/<?= $data['gambar']; ?>" class="card-img-top" alt="..." style="height: 200px; object-fit:cover">
                            <div class="card-body">
                                <p class="card-text"><?= $data['subjudul']; ?></p>

                                <a href="detail.php?id_gambar=<?= $data['id_detail_gf']; ?>&id_galeri=<?= $id; ?>" class="btn icon btn-danger float-end" onclick="return confirm('Anda yakin ingin menghapus?'); "><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="gambar" class="mb-1">Masukkan Gambar Galeri Foto</label>
                                        <input class="form-control" type="file" id="gambar" name="gambar" required>
                                        <?php if (isset($err)) echo "<p class='text-danger'> $max</p>" ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="subjudul" class="mb-1">Keterangan</label>
                                        <input class="form-control" type="text" id="subjudul" name="subjudul" required>
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