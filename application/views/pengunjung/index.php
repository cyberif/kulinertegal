<!-- carousel image START -->
<div class="container-fluid bg-dark text-light">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/img/cafe.jpg" class="d-block w-100" alt="carousel-1" style="height: 70vh; filter: blur(2.5px) brightness(70%)" />
                <div class="carousel-caption">
                    <h5>Kuliner Tegal</h5>
                    <p>Website Informasi Tentang Kuliner</p>
                    <a href="<?= base_url('pengunjung/aboutus') ?>" class="btn btn-warning text-dark fw-bold">About Us</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="assets/img/cafe.jpg" class="d-block w-100" alt="carousel-2" style="height: 70vh; filter: blur(2.5px)" />
                <div class="carousel-caption">
                    <h5>Foods</h5>
                    <p>Tersedia Berbagai Macam Makanan</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="assets/img/cafe.jpg" class="d-block w-100" alt="carousel-3" style="height: 70vh; filter: blur(2.5px)" />
                <div class="carousel-caption">
                    <h5>Beverages</h5>
                    <p>Tersedia Berbagai Macam Minuman</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- carousel image END -->
<!-- Start Main Content -->
<!-- START FnB -->
<div class="container-fluid p-4">
    <div class="row mt-3">
        <div class="col">
            <h4 class="sub-judul fs-3 text-warning fw-bold">Foods & Beverages</h4>
        </div>
    </div>
    <div class="row">
        <?php foreach ($foodsnbevs as $fnb) : ?>
            <div class="col-6 col-lg-3 mx-auto">
                <div class="card">
                    <img src="<?= base_url('assets/img/warung/') . $fnb['image']; ?>" class="card-img-top" alt="<?= $fnb['image']; ?>" style="height: 170px;">
                    <div class="card-body">
                        <h5 class="card-text mb-0 fw-bold"><?= $fnb['nama']; ?></h5>
                        <small class="card-text mt-0 fw-light"><?= $fnb['alamat']; ?></small>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="float-end btn btn-dark text-warning rounded-pill fw-bold disabled">View
                            More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-warning rounded-pill text-dark fw-bold disabled" href="/">See More</a>
        </div>
    </div>
</div>
<!-- END FnB -->
<!-- START FOODS -->
<div class="container-fluid p-4">
    <div class="row mt-3">
        <div class="col">
            <h4 class="sub-judul fs-3 text-warning fw-bold">Foods</h4>
        </div>
    </div>
    <div class="row">
        <?php foreach ($foods as $f) : ?>
            <div class="col-6 col-lg-3 mx-auto">
                <div class="card">
                    <img src="<?= base_url('assets/img/warung/') . $f['image']; ?>" class="card-img-top" alt="<?= $f['image']; ?>" style="height: 170px;">
                    <div class="card-body">
                        <h5 class="card-text mb-0 fw-bold"><?= $f['nama']; ?></h5>
                        <small class="card-text mt-0 fw-light"><?= $f['alamat']; ?></small>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="float-end btn btn-dark text-warning rounded-pill fw-bold disabled">View
                            More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-warning rounded-pill text-dark fw-bold disabled" href="/">See More</a>
        </div>
    </div>
</div>
<!-- END FOODS -->
<!-- START BEVERAGES -->
<div class="container-fluid p-4">
    <div class="row mt-3">
        <div class="col">
            <h4 class="sub-judul fs-3 text-warning fw-bold">Beverages</h4>
        </div>
    </div>
    <div class="row">
        <?php foreach ($beverages as $b) : ?>
            <div class="col-6 col-lg-3 mx-auto">
                <div class="card">
                    <img src="<?= base_url('assets/img/warung/') . $b['image']; ?>" class="card-img-top" alt="<?= $b['image']; ?>" style="height: 170px;">
                    <div class="card-body">
                        <h5 class="card-text mb-0 fw-bold"><?= $b['nama']; ?></h5>
                        <small class="card-text mt-0 fw-light"><?= $b['alamat']; ?></small>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="float-end btn btn-dark text-warning rounded-pill fw-bold disabled">View
                            More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a class="btn btn-warning rounded-pill text-dark fw-bold disabled" href="/">See More</a>
            </div>
        </div>
    </div>
    <!-- END BEVERAGES -->

    <!-- End Main Content -->