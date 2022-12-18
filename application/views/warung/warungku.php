<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-8">

                <div class="card">
                    <?php
                    $kategori = $warung['id_wkategori'];
                    if ($kategori == 2) {
                        $kategori = "Foods";
                    } elseif ($kategori == 3) {
                        $kategori = "Beverages";
                    } else {
                        $kategori = "Foods & Beverages";
                    }
                    ?>
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="<?= base_url('assets/img/warung/' . $warung['image']); ?>" alt="Profile" class="rounded-circle">
                        <h2><?= $warung['nama']; ?></h2>
                        <p><?= $kategori; ?></p>
                        <h3><?= $warung['alamat']; ?></h3>
                        <h3>Buka <?= $warung['hari_buka']; ?></h3>
                        <h3><?= $warung['waktu_buka']; ?> - <?= $warung['waktu_tutup']; ?></h3>
                        <a href="<?= base_url('warung/editWarungku/' . $user['id']); ?>" class="btn btn-primary">Edit Warungku</a>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <h2 class="mb-2">Contact</h2>
                        <p class="mt-0 mb-0"><i class="bx bxl-whatsapp fs-4"></i><?= $warung['no_wa']; ?></p>
                        <p class="mt-0 mb-0"><i class="bx bxl-instagram fs-4"></i><?= $warung['instagram']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <h2 class="mb-1">Go Food</h2>
                        <a href="<?= $warung['gofood']; ?>" target="_blank" class="mt-0 mb-0">Klik disini</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->