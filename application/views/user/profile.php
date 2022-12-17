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
        <div class="col-7">
            <h4 class="fs-3 text-warning text-center">My Profile</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="row d-flex justify-content-around mb-3">
            <div class="col-lg-6 d-flex flex-column align-items-center">
                <img src="../assets/img/team/2.jpg" alt="Profile" width="250" height="250" class="rounded-circle">
                <h6 class="fs-5 text-warning mt-2 mb-0"><?= $user['nama']; ?></h6>
                <p class="p-team text-light mt-0 mb-0"><?= $user['email']; ?></p>
                <a href="#" class="text-warning fw-light link-ig mb-3">Edit
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