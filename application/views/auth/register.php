<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card rounded mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-3">Create an Account</h5>
                        </div>

                        <form class="row g-3 needs-validation" method="POST" novalidate>
                            <div class="col-12">
                                <input type="text" placeholder="Nama" name="nama" class="form-control rounded-pill" id="yourName" required>
                                <div class="ms-3 invalid-feedback">Silahkan masukan nama!</div>
                            </div>

                            <div class="col-12">
                                <input type="email" placeholder="Email" name="email" class="form-control rounded-pill" id="yourEmail" required>
                                <div class="ms-3 invalid-feedback">Silahkan masukan email!</div>
                            </div>

                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Password" name="password1" class="form-control rounded-pill" id="yourPassword" required>
                                        <div class="ms-3 invalid-feedback">Masukan password!</div>
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="password" placeholder="Repeat Password" name="password2" class="form-control rounded-pill" id="yourPassword" required>
                                        <div class="ms-3 invalid-feedback">Konfirmasi password!</div>
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
                            <hr class="mb-1">
                            <div class="col-12 mt-0">
                                <p class="small mb-0 text-center">Already have an account? <a href="<?= base_url('auth'); ?>">Log in</a></p>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="credits text-center">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>

            </div>
        </div>
    </div>

</section>