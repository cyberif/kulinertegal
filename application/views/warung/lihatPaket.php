<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <a href="<?= base_url('warung/tambahPaket'); ?>" class="btn btn-primary fw-bold text-light mb-2"><i class="bi bi-plus-circle me-1"></i>Tambah</a>
                <?= $this->session->flashdata('pesan'); ?>
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="">Nama</a></li>
                                <li><a class="dropdown-item" href="">ID</a></li>
                                <li><a class="dropdown-item" href="">Email</a></li>
                                <li><a class="dropdown-item" href="#">Date Created</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Paket <span>| <?= $jmlPaket; ?> results</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Rincian Paket</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($paket as $p) : ?>
                                        <tr>
                                            <td class="fw-bold"><?= $i++; ?></td>
                                            <td><?= $p['nama']; ?></td>
                                            <td><?= $p['rincian']; ?></td>
                                            <td><?= $p['harga']; ?></td>
                                            <td><a href="#" class="btn btn-sm rounded-pill btn-danger fw-bold text-light px-3" data-bs-toggle="modal" data-bs-target="<?= '#hapus' . $p['id'] ?>">Hapus</a></td>
                                        </tr>
                                        <!-- Basic Modal -->
                                        <div class="modal fade" id="<?= 'hapus' . $p['id'] ?>" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Yakin Hapus Paket?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="fs-6">Pilih <span class="fw-bold text-danger">Hapus</span> untuk menghapus paket <span class="fw-bold text-primary"><?= $p['nama']; ?></span>.</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                                                        <a type="button" class="btn btn-danger" href="<?= base_url('warung/hapusPaket/' . $p['id']); ?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Basic Modal-->
                                    <?php endforeach ?>
                                </tbody>
                            </table>


                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <!-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <p>HEYHO</p>
                    </div>
                </div>
            </div> -->
            <!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->