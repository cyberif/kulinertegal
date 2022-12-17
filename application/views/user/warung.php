<!-- START Warung -->
<div class="container-fluid p-4">
    <div class="row mt-3">
        <div class="col">
            <h4 class="sub-judul fs-3 text-warning fw-bold">Warung</h4>
        </div>
    </div>
    <div class="row">
        <?php foreach ($lihatwarung as $lw) : ?>
            <div class="col-6 col-lg-3 mx-auto">
                <div class="card">
                    <img src="<?= base_url('assets/img/warung/') . $lw['image']; ?>" class="card-img-top" alt="<?= $lw['image']; ?>" style="height: 170px;">
                    <div class="card-body">
                        <h5 class="card-text mb-0 fw-bold"><?= $lw['nama']; ?></h5>
                        <small class="card-text mt-0 fw-light"><?= $lw['alamat']; ?></small>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('user/menu/' . $lw['id']); ?>" class="float-end btn btn-dark text-warning rounded-pill fw-bold">View
                            More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-warning rounded-pill text-dark fw-bold" href="/">See More</a>
        </div>
    </div>
</div>
<!-- END Warung -->