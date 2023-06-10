<?php
include '_header.php';
include 'admin/_config.php';
?>

<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Paket Wisata
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <section class="section-paket-wisata-content" id="paketWisataContent">
                <div class="row section-paket-wisata-card justify-content-center">

                    <?php
                    $query   = $db->query("SELECT * FROM paket_wisata
                    LEFT JOIN gambar_paket_wisata ON paket_wisata.id_paket_wisata = gambar_paket_wisata.id_paket_wisata GROUP BY paket_wisata.id_paket_wisata LIMIT 4");
                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-paket-wisata text-center d-flex flex-column mt-3" style="background-image: url(admin/assets/img/paket-wisata/<?= $data['gambar']; ?>);">
                                <div class="title-paket"><?= $data['nama']; ?></div>
                                <div class="paket-wisata-button mt-auto">
                                    <a href="detail-paket.php?id=<?= $data['id_paket_wisata']; ?>" class="btn btn-paket-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </section>
        </div>
    </div>
</section>


<?php include '_footer.php' ?>