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
                        Tentang Kami
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow-sm" style="border: none;">
                    <div class="card-body p-lg-5 p-4">
                        <h5 class="card-title mb-4">Apar Mangrove Park Nan Mempesona</h5>
                        <img src="assets/img/pariaman.png" width="250" alt="" class="float-start img-fluid">
                        <div class="card-text" style="text-align: justify;">
                            <?= $data['tentang_kami']; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include '_footer.php' ?>