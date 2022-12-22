<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-11">
                <?= $this->session->flashdata('pesan'); ?>
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                            <h5 class="card-title">User Warung <span>| <?= $jmlUser; ?> results</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($user as $u) : ?>
                                        <tr>
                                            <td class="fw-bold"><?= $i++; ?></td>
                                            <td><?= $u['id']; ?></td>
                                            <td><?= $u['nama']; ?></td>
                                            <td><?= $u['email']; ?></td>
                                            <td><?= date('d F Y', $u['date_created']); ?></td>
                                        </tr>
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