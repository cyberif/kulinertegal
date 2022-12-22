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
                            <h5 class="card-title">Form Edit <span>| User ID <?= $user['id']; ?></span></h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="<?= base_url('admin/jadikanWarung/' . $user['id']); ?>">
                                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                <input type="hidden" name="is_active" value="<?= $user['is_active']; ?>">
                                <input type="hidden" name="password" value="<?= $user['password']; ?>">
                                <input type="hidden" name="image" value="<?= $user['image']; ?>">
                                <input type="hidden" name="date_created" value="<?= $user['date_created']; ?>">
                                <input type="hidden" name="email" value="<?= $user['email']; ?>">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" placeholder="Nama Warung" name="nama">
                                        <label for="floatingName">Nama Warung</label>
                                    </div>
                                </div>
                                <?= form_error('nama', '<small class="text-danger ps-3">', '</small>'); ?>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" placeholder="Alamat Warung" name="alamat">
                                        <label for="floatingName">Alamat Warung</label>
                                    </div>
                                </div>
                                <?= form_error('alamat', '<small class="text-danger ps-3">', '</small>'); ?>

                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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