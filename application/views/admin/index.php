<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-10">
                <div class="row">

                    <!-- User Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">User <span>| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jmlUser; ?></h6>
                                        <span class="text-primary small pt-1 fw-bold">Results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End User Card -->

                    <!-- Warung Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Warung <span>| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jmlWarung; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">Results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Warung Card -->

                    <!-- Menu Card -->
                    <!-- <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Menu <span>| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Menu Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">User & Warung <span>/Today</span></h5>
                                <!-- Pie Chart -->
                                <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#pieChart")).setOption({
                                            title: {
                                                text: 'User & Warung',
                                                subtext: 'Real Data',
                                                left: 'center'
                                            },
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                orient: 'vertical',
                                                left: 'left'
                                            },
                                            series: [{
                                                name: 'Jumlah',
                                                type: 'pie',
                                                radius: '50%',
                                                data: [{
                                                        value: <?= $jmlUser; ?>,
                                                        name: 'User'
                                                    },
                                                    {
                                                        value: <?= $jmlWarung; ?>,
                                                        name: 'Warung'
                                                    }
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Pie Chart -->
                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- User -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">User <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($user as $u) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></a></th>
                                                <td><?= $u['nama']; ?></td>
                                                <td><?= $u['email']; ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End User -->
                    <!-- User -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">Warung <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($warung as $w) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></a></th>
                                                <td><?= $w['nama']; ?></td>
                                                <td><?= $w['email']; ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End User -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->