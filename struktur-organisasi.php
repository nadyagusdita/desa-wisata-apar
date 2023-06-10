<?php
include 'admin/_config.php';
include '_header.php';


$query   = $db->query("SELECT * FROM profil_desa");
$data = mysqli_fetch_assoc($query);

?>

<section class="section-details-header"></section>
<section class="section-details-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Struktur Organisasi
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow-sm" style="border: none;">
                    <div class="card-body p-lg-5 p-4">
                        <h5 class="card-title mb-5 text-center">Struktur Organisasi Desa Apar</h5>

                        <img src="admin/assets/img/profil/<?= $data['struktur_organisasi']; ?>" alt="" class="d-block mx-auto img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include '_footer.php' ?>