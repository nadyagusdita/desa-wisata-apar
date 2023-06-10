<?php
include('../_config.php');

$id = $_GET['id'];

$query   = $db->query("SELECT * FROM paket_wisata
INNER JOIN gambar_paket_wisata ON paket_wisata.id_paket_wisata = gambar_paket_wisata.id_paket_wisata
WHERE paket_wisata.id_paket_wisata = '$id'");

if (isset($_POST['submit'])) {
    $ukuranFile = $_FILES['gambar']['size'];

    if ($ukuranFile > 1044070) {
        $err = 1;
        $max = 'Ukuran gambar maksimal 1 MB';
    }
}
if (isset($_POST['submit']) && $err != 1) {
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
            move_uploaded_file($tmpName, '../assets/img/paket-wisata/' . $namaFileBaru);

            $query = "INSERT INTO gambar_paket_wisata VALUES ('', '$id', '$namaFileBaru')";
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
    $id_paket = $_GET['id_paket'];
    $id_gambar = $_GET['id_gambar'];

    $sql   = mysqli_query($db, "SELECT * FROM gambar_paket_wisata WHERE id_gambar_pw = $id_gambar");
    $data = mysqli_fetch_assoc($sql);

    $statement = $db->prepare("DELETE FROM gambar_paket_wisata WHERE id_gambar_pw = ?");
    $statement->bind_param('i', $id_gambar);
    $statement->execute();

    if ($statement > 0) {
        unlink('../assets/img/paket-wisata/' .  $data['gambar']);
        header("location: detail.php?berhasil=yes&id=$id_paket");
    } else {
        header("location: detail.php?berhasil=no&id=$id_paket");
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
                        <h3>Gambar Paket Wisata</h3>
                        <p class="text-subtitle text-muted">Kelola Gambar Paket Wisata</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/paket-wisata">Paket Wisata</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gambar Paket Wisata</li>
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
                        <div class="card" style="width:18rem;">

                            <a href="detail.php?id_gambar=<?= $data['id_gambar_pw']; ?>&id_paket=<?= $id; ?>" class="btn btn-sm icon btn-danger float-end" onclick="return confirm('Anda yakin ingin menghapus?'); "><i class="bi bi-trash"></i></a>

                            <img src="../assets/img/paket-wisata/<?= $data['gambar']; ?>" class="card-img-bottom" alt="..." style="height: 200px; object-fit:cover">
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
                                        <label for="gambar" class="mb-1">Masukkan Gambar Paket Wisata</label>
                                        <input class="form-control" type="file" id="gambar" name="gambar" required>
                                        <?php if (isset($err)) echo "<p class='text-danger'> $max</p>" ?>
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