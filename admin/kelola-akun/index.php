<?php

include '../_config.php';

$query   = mysqli_query($db, "SELECT * FROM admin");
$data = mysqli_fetch_assoc($query);

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
                        <p class="text-subtitle text-muted">Kelola Akun</p>
                    </div>

                    <div class="col-6 order-md-2 order-first float-end">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Akun</li>
                            </ol>
                        </nav>
                    </div>

                </div>

                <a href="edit.php" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> Edit Akun</a>

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
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="username" class="mb-1">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" value="<?= $data['username']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="password" class="mb-1">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" disabled>
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