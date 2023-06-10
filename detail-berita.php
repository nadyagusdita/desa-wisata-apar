<?php
include '_header.php';
include 'admin/_config.php';

$id = $_GET['id'];

$query   = mysqli_query($db, "SELECT * FROM berita WHERE id_berita = $id");
$data = mysqli_fetch_assoc($query);
?>

<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Berita
                    </li>
                    <li class="breadcrumb-item active">
                        Details
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow-sm" style="border: none;">
                    <img src="admin/assets/img/berita/<?= $data['gambar']; ?>" class="card-img-top">
                    <div class="card-body p-lg-5 p-4">
                        <h6 class="card-subtitle mb-3 text-muted">
                            <small class="text-muted">
                                <i class="bi bi-clock me-1"></i>
                                <?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                            </small>
                        </h6>
                        <h5 class="card-title mb-4"><?= $data['judul']; ?></h5>
                        <p class="card-text" style="text-align: justify;"><?= $data['isi']; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include '_footer.php' ?>