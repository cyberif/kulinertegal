<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Form Menu Baru</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="<?= base_url('warung/tambahMenu'); ?>">
                                <input type="hidden" name="id_warung" value="<?= $warung['id']; ?>">
                                <input type="hidden" name="email" value="<?= $warung['email']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="Nama Menu" name="nama">
                                            <label for="floatingName">Nama Menu</label>
                                        </div>
                                    </div>
                                    <?= form_error('nama', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="Harga Menu" name="harga">
                                            <label for="floatingName">Harga Menu</label>
                                        </div>
                                    </div>
                                    <?= form_error('harga', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-primary">Add Menu</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->