<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-10">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title mb-3">Form Edit Warungku</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="<?= base_url('warung/edit_warungku/' . $warung['id']); ?>">
                                <input type="hidden" name="no" value="<?= $warung['no']; ?>">
                                <input type="hidden" name="id" value="<?= $warung['id']; ?>">
                                <input type="hidden" name="id_wkategori" value="<?= $warung['id_wkategori']; ?>">
                                <input type="hidden" name="wilayah" value="<?= $warung['wilayah']; ?>">
                                <input type="hidden" name="date_crated" value="<?= $warung['date_created']; ?>">
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Nama Warung</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nama" type="text" class="form-control" value="<?= $warung['nama']; ?>">
                                    </div>
                                    <?= form_error('nama', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Alamat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="alamat" type="text" class="form-control" value="<?= $warung['alamat']; ?>">
                                    </div>
                                    <?= form_error('alamat', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Hari Buka</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="hari_buka" type="text" class="form-control" value="<?= $warung['hari_buka']; ?>">
                                    </div>
                                    <?= form_error('hari_buka', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Jam Buka</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="waktu_buka" type="text" class="form-control" value="<?= $warung['waktu_buka']; ?>">
                                    </div>
                                    <?= form_error('waktu_buka', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Jam Tutup</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="waktu_tutup" type="text" class="form-control" value="<?= $warung['waktu_tutup']; ?>">
                                    </div>
                                    <?= form_error('waktu_tutup', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Whatsapp</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="no_wa" type="text" class="form-control" value="<?= $warung['no_wa']; ?>">
                                    </div>
                                    <?= form_error('no_wa', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Username Instagram</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="instagram" type="text" class="form-control" value="<?= $warung['instagram']; ?>">
                                    </div>
                                    <?= form_error('instagram', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Link Gofood</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="gofood" type="text" class="form-control" value="<?= $warung['gofood']; ?>">
                                    </div>
                                    <?= form_error('gofood', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label fs-6 fw-bold">Gambar</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="image" type="text" class="form-control" value="<?= $warung['image']; ?>">
                                    </div>
                                    <?= form_error('image', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>

                                <div class="text-center mb-4">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->