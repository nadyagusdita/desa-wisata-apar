<?php

include '../_config.php';

$query   = mysqli_query($db, "SELECT * FROM admin");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['edit-username'])) {
    $username = htmlspecialchars($_POST["username"]);

    $query = mysqli_query($db, "UPDATE admin SET 
                                username = '$username'") or die(mysqli_error($db));

    if ($query > 0) {
        header("location: index.php?berhasil=yes");
    } else {
        header("location: index.php?berhasil=no");
    }
}

if (isset($_POST['submit'])) {
    $password = $_POST["password"];
    $cekPassword = password_verify($password, $data["password"]);
    if (!$cekPassword) {
        $passwordErr = "Password lama salah.";
        $err = 1;
    }
}
if (isset($_POST['submit']) && $err != 1) {
    $password2 = htmlspecialchars($_POST["password2"]);
    $password2 = password_hash($password2, PASSWORD_DEFAULT);

    $query = mysqli_query($db, "UPDATE admin SET 
                                password = '$password2'") or die(mysqli_error($db));

    if ($query > 0) {
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
                        <h3>Akun</h3>
                        <p class="text-subtitle text-muted">Edit Akun</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/kelola-akun">Akun</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Akun</li>
                            </ol>
                        </nav>
                    </div>

                </div>

            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="username" class="mb-1">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" value="<?= $data['username']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="edit-username">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="password" class="mb-1">Masukkan Password Lama</label>
                                        <input class="form-control" type="password" id="password" name="password" required>
                                        <?php if (isset($passwordErr)) echo "<p class='text-danger'> $passwordErr</p>" ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="password2" class="mb-1">Masukkan Password Baru</label>
                                        <input class="form-control" type="password" id="password2" name="password2" required>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include '../templates/_footer.php' ?>