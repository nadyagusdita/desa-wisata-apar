<?php
include 'admin/_config.php';
include '_header.php';
?>

<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Galeri
                    </li>
                    <li class="breadcrumb-item active">
                        Foto
                    </li>
                </ol>
            </div>
        </div>

        <div class="row justify-content-center">

            <?php
            $query   = $db->query("SELECT * FROM galeri_foto
                LEFT JOIN detail_galeri_foto ON galeri_foto.id_galeri_foto = detail_galeri_foto.id_galeri_foto GROUP BY galeri_foto.id_galeri_foto ORDER BY galeri_foto.tanggal_upload DESC");
            while ($data = mysqli_fetch_assoc($query)) :
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card shadow-sm p-2">
                        <img src="admin/assets/img/galeri-foto/<?= $data['gambar']; ?>" class="card-img-top" style="object-fit:cover; height:200px" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $data['judul']; ?>
                            </h5>
                            <p class="card-text">
                                <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                </small>
                            </p>
                            <div class="btn-selengkapnya text-center">
                                <a href="detail-galeri.php?id=<?= $data['id_galeri_foto']; ?>" class="btn px-3 py-2">
                                    Lihat Galeri
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>

<?php include '_footer.php' ?>