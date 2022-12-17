<style>
    h6,
    h5,
    h4,
    .copyright {
        font-family: 'Lobster', cursive;
    }

    .btn,
    .link-ig,
    .p-desc,
    .menu,
    footer a {
        font-family: 'Josefin Sans', sans-serif;
    }

    .alamat {
        font-family: 'Dancing Script', cursive;
    }
</style>
<!-- Start Warung Profile -->
<div class="container-fluid bg-dark mt-4">
    <div class="row d-flex justify-content-around">
        <div class="row d-flex justify-content-around mb-3">
            <div class="col-lg-6 d-flex flex-column align-items-center">
                <img src="<?= base_url('assets/img/warung/' . $warung['image']); ?>" alt="<?= $warung['image']; ?>" width="200" height="200" class="rounded-circle">
                <h6 class="fs-4 text-warning mt-3 mb-0"><?= $warung['nama']; ?></h6>
                <p class="alamat fs-6 text-light mt-0 mb-0"><?= $warung['alamat']; ?></p>
                <p class="p-desc text-light fw-bold mt-0 mb-0">Buka <?= $warung['hari_buka']; ?></p>
                <p class="p-desc text-light fw-bold mt-0 mb-0"><?= $warung['waktu_buka']; ?> - <?= $warung['waktu_tutup']; ?></p>
            </div>
        </div>
        <div class="row d-flex justify-content-around mb-3">
            <div class="col-lg-3 d-flex justify-content-around flex-row mx-auto">
                <a href="https://instagram.com/<?= $warung['instagram']; ?>" class="text-warning fw-light link-ig mb-3" target="_blank">
                    <i class="bx bxl-instagram"></i>
                    Instagram</a>
                <a href="<?= $warung['gofood']; ?>" class="text-warning fw-light link-ig mb-3" target="_blank">
                    <i class="bx bx-food-menu"></i>
                    Go Food</a>
            </div>
        </div>
    </div>
</div>
<!-- End Warung Profile -->
<!-- Start Warung Menu -->
<div class="container-fluid bg-dark mt-2">

    <div class="row d-flex justify-content-around">
        <div class="col-lg-5 border border-3 border-warning rounded-3">
            <h4 class="fs-4 py-3 text-light text-center">Menu</h4>
            <div class="row">
                <?php
                if ($jmlMenu < 1) {
                    $jmlMenu = "Menu Kosong";
                    echo '<p class="menu text-light me-3">', $jmlMenu, '</p>';
                } else { ?>
                    <?php foreach ($menu as $m) : ?>
                        <div class="col-12 d-flex flex-row justify-content-between px-3">
                            <p class="menu text-light me-3"><?= $m['nama']; ?></p>
                            <p class="menu text-light"><?= $m['harga']; ?></p>
                        </div>
                    <?php endforeach ?>
                <?php }; ?>
            </div>
        </div>
    </div>

</div>
<!-- End Warung Menu -->
<!-- Start Warung Paket -->
<div class="container-fluid bg-dark mt-2">

    <div class="row d-flex justify-content-around">
        <div class="col-lg-5 border border-3 border-warning rounded-3">
            <h4 class="fs-4 py-3 text-light text-center mb-0">Paket</h4>
            <div class="row">
                <?php
                if ($jmlPaket <= 0) {
                    $jmlPaket = "Paket Kosong";
                    echo '<p class="menu text-light me-3">', $jmlPaket, '</p>';
                } else {  ?>
                    <?php foreach ($paket as $p) : ?>
                        <div class="col-12 d-flex flex-column px-3 mb-0">
                            <h6 class="menu text-light fw-bold"><?= $p['nama']; ?></h6>
                            <div class="row">
                                <div class="col-12 mt-0 d-flex flex-row justify-content-between px-3">
                                    <p class="text-light me-3"><?= $p['rincian']; ?></p>
                                    <p class="menu text-light"><?= $p['harga']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php }; ?>

            </div>
        </div>
    </div>
</div>
<!-- End Warung Paket -->