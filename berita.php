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
                    <li class="breadcrumb-item active">
                        Berita
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">

            <?php
            $query   = $db->query("SELECT * FROM berita ORDER BY tanggal_upload DESC LIMIT 3");
            while ($data = mysqli_fetch_assoc($query)) :
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm p-2">
                        <img src="admin/assets/img/berita/<?= $data['gambar']; ?>" class="card-img-top" style="object-fit:cover; height:200px" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $data['judul']; ?>
                            </h5>
                            <p class="card-text">
                                <?= strip_tags(substr($data['isi'], 0, 150)); ?>...
                            </p>
                            <p class="card-text">
                                <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                </small>

                            </p>
                            <div class="btn-selengkapnya text-center">
                                <a href="detail-berita.php?id=<?= $data['id_berita']; ?>" class="btn px-3 py-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm p-2">
                    <img src="assets/img/berita.jpg" class="card-img-top" style="object-fit:cover; height:200px" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021
                        </h5>
                        <p class="card-text">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021 consectetur adipisicing elit. Ipsa esse, dignissimos animi earum provident ad minima architecto nisi unde iste?...
                        </p>
                        <p class="card-text">
                            <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime("2021-08-15")); ?>
                            </small>

                        </p>
                        <div class="btn-selengkapnya text-center">
                            <a href=#" class="btn px-3 py-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm p-2">
                    <img src="assets/img/berita.jpg" class="card-img-top" style="object-fit:cover; height:200px" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021
                        </h5>
                        <p class="card-text">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021 consectetur adipisicing elit. Ipsa esse, dignissimos animi earum provident ad minima architecto nisi unde iste?...
                        </p>
                        <p class="card-text">
                            <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime("2021-08-15")); ?>
                            </small>

                        </p>
                        <div class="btn-selengkapnya text-center">
                            <a href=#" class="btn px-3 py-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm p-2">
                    <img src="assets/img/berita.jpg" class="card-img-top" style="object-fit:cover; height:200px" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021
                        </h5>
                        <p class="card-text">
                            Desa Wisata Apar Kota Pariaman Raih Juara 3 ADWI 2021 consectetur adipisicing elit. Ipsa esse, dignissimos animi earum provident ad minima architecto nisi unde iste?...
                        </p>
                        <p class="card-text">
                            <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime("2021-08-15")); ?>
                            </small>

                        </p>
                        <div class="btn-selengkapnya text-center">
                            <a href=#" class="btn px-3 py-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>


    </div>
</section>


<?php include '_footer.php' ?>