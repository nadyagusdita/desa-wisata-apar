<?php
include 'admin/_config.php';
include '_header.php';

$id = $_GET['id'];

$query   = mysqli_query($db, "SELECT * FROM paket_wisata
        INNER JOIN gambar_paket_wisata ON paket_wisata.id_paket_wisata = gambar_paket_wisata.id_paket_wisata WHERE paket_wisata.id_paket_wisata = $id");
$data = mysqli_fetch_assoc($query);
?>

<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Paket Wisata
                    </li>
                    <li class="breadcrumb-item active">
                        Details
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <section class="section-detail-berita">
                <div class="row">
                    <div class="col">
                        <div class="card card-details">

                            <h1><?= $data['nama']; ?></h1>

                            <div class="gallery mx-auto d-block">
                                <div class="xzoom-container">
                                    <img src="admin/assets/img/paket-wisata/<?= $data['gambar']; ?>" class="xzoom img-fluid" xoriginal="admin/assets/img/paket-wisata/<?= $data['gambar']; ?>" id="xzoom-default">
                                </div>
                                <div class="xzoom-thumbs">
                                    <?php
                                    $query2   = mysqli_query($db, "SELECT * FROM gambar_paket_wisata WHERE id_paket_wisata = $id");
                                    while ($list = mysqli_fetch_assoc($query2)) :
                                    ?>
                                        <a href="admin/assets/img/paket-wisata/<?= $list['gambar']; ?>">
                                            <img class="xzoom-gallery img-fluid" width="120" height="80" src="admin/assets/img/paket-wisata/<?= $list['gambar']; ?>" xpreview="admin/assets/img/paket-wisata/<?= $list['gambar']; ?>">
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                            <h2>Tentang Wisata</h2>
                            <p>
                                <?= $data['tentang_wisata']; ?>
                            </p>
                            <div class="row features">
                                <div class="col-lg-4">
                                    <img src="assets/img/phone-call.png" class="description-image">
                                    <div class="description">
                                        <h3>Contact Person</h3>
                                        <p><?= $data['contact_person']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


<?php include '_footer.php' ?>