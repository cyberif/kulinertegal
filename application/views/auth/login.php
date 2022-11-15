<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="card rounded mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login</h5>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <form class="row g-3" method="POST" action="<?= base_url('auth'); ?>">
              <div class="col-12">
                <input placeholder="Email" type="email" name="email" class="form-control rounded-pill" id="email" value="<?= set_value('email'); ?>">
              </div>
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

              <div class="col-12">
                <input placeholder="Password" type="password" name="password" class="form-control rounded-pill" id="password">
              </div>
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              <div class="col-12">
                <button class="btn-submit w-100 rounded-pill" type="submit">Login</button>
              </div>
              <p class="small mb-0 fw-bold text-center">OR</p>
              <div class="col-12">
                <button class="btn-google w-100 rounded-pill" type="submit"><i class="fa-brands fa-google me-2"></i>Login With Google</button>
              </div>
            </form>
            <hr class="mb-1">
            <div class="col-12 mt-0">
              <p class="small mb-0 text-center">Create an account? <a href="<?= base_url('auth/register'); ?>">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>