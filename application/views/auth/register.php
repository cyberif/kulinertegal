<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card rounded mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-3">Create an Account</h5>
                        </div>

                        <form class="row g-3" method="POST" action="<?= base_url('auth/register'); ?>">
                            <div class="col-12">
                                <input type="text" placeholder="Nama" name="nama" class="form-control rounded-pill" id="yourName" value="<?= set_value('nama'); ?>">
                            </div>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                            <div class="col-12">
                                <input type="email" placeholder="Email" name="email" class="form-control rounded-pill" id="yourEmail" value="<?= set_value('email'); ?>">
                            </div>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Password" name="password1" class="form-control rounded-pill" id="yourPassword" required>
                                    </div>
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Repeat Password" name="password2" class="form-control rounded-pill" id="yourPassword" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn-submit w-100 rounded-pill" type="submit">Create Account</button>
                            </div>
                            <div class="col-12">
                                <p class="text-center fw-bold">OR</p>
                                <button class="btn-google w-100 rounded-pill" type="button"><i class="fa-brands fa-google me-2"></i>Log In With Google</button>
                            </div>
                        </form>
                        <hr class="mb-1">
                        <div class="col-12 mt-0">
                            <p class="small mb-0 text-center">Already have an account? <a href="<?= base_url('auth'); ?>">Log in</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>