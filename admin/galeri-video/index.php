<?php
include('../_config.php');
$query   = $db->query("SELECT * FROM video");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $statement = $db->prepare("DELETE FROM video WHERE id_video = ?");
    $statement->bind_param('i', $id);
    $statement->execute();

    if ($statement > 0) {
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
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Galeri Video</h3>
                        <p class="text-subtitle text-muted">Kelola Video</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 order-md-2 order-first float-end">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </nav>
                </div>

                <a href="tambah.php" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i> Tambah Video</a>

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
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Tanggal Publikasi</th>
                                <th>Judul</th>
                                <th>Link Video</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $data['tanggal_upload']; ?></td>
                                    <td><?= $data['judul']; ?></td>
                                    <td><?= $data['link']; ?></td>
                                    <td>
                                        <div class="buttons">
                                            <a href="edit.php?id=<?= $data['id_video']; ?>" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                            <a href="index.php?id=<?= $data['id_video']; ?>" class="btn icon btn-danger" onclick="return confirm('Anda yakin ingin menghapus?'); "><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php include '../templates/_footer.php' ?>