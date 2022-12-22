<style>
    .judul,
    h6,
    h5,
    h4,
    .copyright {
        font-family: 'Lobster', cursive;
    }

    .btn,
    .profile-details,
    .link-ig,
    .p-team,
    footer a {
        font-family: 'Josefin Sans', sans-serif;
    }

    /* .copyright {
            font-family: 'Dancing Script', cursive;
        } */
</style>
<!-- Start Profile -->
<div class="container-fluid bg-dark mt-4">
    <div class="row d-flex justify-content-around">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="col-7">
            <h4 class="fs-3 text-warning text-center">My Profile</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="row d-flex justify-content-around mb-3">
            <div class="col-lg-6 d-flex flex-column align-items-center">
                <img src="<?= base_url('assets/img/userprofile/' . $user['image']); ?>" alt="Profile" width="250" height="250" class="rounded-circle">
                <h6 class="fs-5 text-warning mt-2 mb-0"><?= $user['nama']; ?></h6>
                <p class="p-team text-light mt-0 mb-0"><?= $user['email']; ?></p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditProfile" class="text-warning fw-light link-ig mb-3">Edit
                    Profile</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark mt-2">

    <div class="row d-flex justify-content-around">
        <div class="col-7">
            <h4 class="fs-3 text-warning text-center">Profile Details</h4>
        </div>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="col-9 d-flex justify-content-around align-items-center">
            <div class="col-4 col-lg-5 text-light fw-bold text-end profile-details">Full Name</div>
            <div class="col-7 col-lg-5 text-light text-start"><?= $user['nama']; ?></div>
        </div>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="col-9 d-flex justify-content-around align-items-center">
            <div class="col-4 col-lg-5 text-light fw-bold text-end profile-details">Email</div>
            <div class="col-7 col-lg-5 text-light text-start"><?= $user['email']; ?></div>
        </div>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="col-9 d-flex justify-content-around align-items-center">
            <div class="col-4 col-lg-5 text-light fw-bold text-end profile-details">Role</div>
            <div class="col-7 col-lg-5 text-light text-start">User</div>
        </div>
    </div>
    <hr class="text-light">
</div>
<!-- End Profile -->
<div class="modal fade" id="modalEditProfile" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-warning">Edit Profile</h5>
                <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="<?= base_url('user/profile'); ?>">
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                        <input type="hidden" name="is_active" value="<?= $user['is_active']; ?>">
                        <input type="hidden" name="password" value="<?= $user['password']; ?>">
                        <input type="hidden" name="image" value="<?= $user['image']; ?>">
                        <input type="hidden" name="date_created" value="<?= $user['date_created']; ?>">
                        <input type="hidden" name="email" value="<?= $user['email']; ?>">
                        <input type="hidden" name="role_id" value="<?= $user['role_id']; ?>">
                        <div class="col-lg-11">
                            <label class="text-light fs-6">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $user['nama']; ?>">
                        </div>
                        <?= form_error('nama', '<small class="text-danger ps-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form><!-- End Profile Edit Form -->
        </div>
    </div>
</div>