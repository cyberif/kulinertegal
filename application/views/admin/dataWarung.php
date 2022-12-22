<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-11">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                            <h5 class="card-title">Warung <span>| <?= $jmlWarung; ?> results</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nama Warung</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>

                                    <?php foreach ($warung as $w) : ?>
                                        <?php
                                        $kategori = $w['id_wkategori'];
                                        if ($kategori == 2) {
                                            $kategori = "Foods";
                                        } elseif ($kategori == 3) {
                                            $kategori = "Beverages";
                                        } else {
                                            $kategori = "Foods & Beverages";
                                        }
                                        ?>
                                        <tr>
                                            <td class="fw-bold"><?= $i++; ?></td>
                                            <td><?= $w['id']; ?></td>
                                            <td><?= $kategori; ?></td>
                                            <td><?= $w['nama']; ?></td>
                                            <td><?= $w['alamat']; ?></td>
                                            <td><a href="#" class="btn btn-sm rounded-pill btn-danger fw-bold text-light px-3" data-bs-toggle="modal" data-bs-target="<?= '#hapus' . $w['id'] ?>">Hapus</a></td>
                                        </tr>
                                        <!-- Basic Modal -->
                                        <div class="modal fade" id="<?= 'hapus' . $w['id'] ?>" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Yakin Hapus Data?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="fs-6">Pilih <span class="fw-bold text-danger">Hapus</span> untuk menghapus Warung <span class="fw-bold text-primary"><?= $w['nama']; ?></span>.</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                                                        <a type="button" class="btn btn-danger" href="<?= base_url('admin/hapusWarung/' . $w['id']); ?>">Hapus</a>
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