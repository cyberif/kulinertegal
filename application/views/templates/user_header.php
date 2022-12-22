<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?> - Kuliner Tegal</title>
    <meta content="Kuliner Tegal" name="description">
    <meta content="Kuliner Tegal" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>img/Logoweb.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans&family=Lobster&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .sub-judul,
        footer h5,
        h6,
        .modal-title,
        .copyright {
            font-family: 'Lobster', cursive;
        }

        .btn,
        .p-team,
        footer a {
            font-family: 'Josefin Sans', sans-serif;
        }

        /* .copyright {
            font-family: 'Dancing Script', cursive;
        } */
    </style>
</head>

<body class="bg-dark">
    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/'); ?>img/Logoweb.png" width="80" height="38"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user/warung'); ?>">Warung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user/aboutus'); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user/profile'); ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modalLogout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav section end -->
    <div class="modal fade" id="modalLogout" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-warning">Information</h5>
                    <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="fs-6 text-light">Pilih <span class="fw-bold text-warning">Log Out</span> untuk mengakhiri session.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a type="button" class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Log Out</a>
                </div>
            </div>
        </div>
    </div>