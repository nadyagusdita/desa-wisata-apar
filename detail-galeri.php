<?php
include 'admin/_config.php';
include '_header.php';

$id = $_GET['id'];
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
                    <li class="breadcrumb-item">
                        Foto
                    </li>
                    <li class="breadcrumb-item active">
                        Detail
                    </li>
                </ol>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $query   = $db->query("SELECT * FROM detail_galeri_foto WHERE id_galeri_foto = $id");
                        $no = 0;
                        while ($data = mysqli_fetch_assoc($query)) :
                            $item_class = ($no == 0) ? 'carousel-item active' : 'carousel-item';
                        ?>
                            <div class="<?= $item_class; ?>">
                                <img src="admin/assets/img/galeri-foto/<?= $data['gambar']; ?>" class="d-block w-100 img-fluid">
                                <!-- style="height: 600px; object-fit:cover" -->
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $data['subjudul']; ?></h5>
                                </div>
                            </div>

                        <?php
                            $no++;
                        endwhile; ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include '_footer.php' ?>