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
                            <h5 class="card-title">Form User Baru</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="<?= base_url('admin/tambahUser'); ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="User Name" name="nama">
                                            <label for="floatingName">User Name</label>
                                        </div>
                                    </div>
                                    <?= form_error('nama', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="User Email" name="email">
                                            <label for="floatingName">User Email</label>
                                        </div>
                                    </div>
                                    <?= form_error('email', '<small class="text-danger ps-3">', '</small>'); ?>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingName" placeholder="Password" name="password1">
                                            <label for="floatingName">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingName" placeholder="Repeat Password" name="password2">
                                            <label for="floatingName">Repeat Password</label>
                                        </div>
                                    </div>
                                </div>
                                <?= form_error('password1', '<small class="text-danger ps-3">', '</small>'); ?>

                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-primary">Add User</button>
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