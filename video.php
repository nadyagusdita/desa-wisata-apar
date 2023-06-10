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
                        Video
                    </li>
                </ol>
            </div>
        </div>

        <div class="row justify-content-center">

            <?php
            $query   = $db->query("SELECT * FROM video ORDER BY tanggal_upload DESC LIMIT 2 ");
            while ($data = mysqli_fetch_assoc($query)) :
            ?>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="card shadow-sm p-2">
                        <iframe height="300" src="http://www.youtube.com/embed/<?= substr($data['link'], -11); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: inherit;"></iframe>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $data['judul']; ?>
                            </h5>
                            <p class="card-text">
                                <small class="text-muted me-2"><i class="bi bi-clock me-1"></i><?php echo date('l, d F Y', strtotime($data['tanggal_upload'])); ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>


<?php include '_footer.php' ?>