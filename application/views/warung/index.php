<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-11">
                <div class="row">

                    <!-- Menu Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Menu <span>| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-file-paper-2-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jmlMenu; ?></h6>
                                        <span class="text-primary small pt-1 fw-bold">Results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Menu Card -->

                    <!-- Paket Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Paket <span>| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bx-food-menu"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jmlPaket; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">Results</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Paket Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Menu & Paket <span>/Today</span></h5>
                                <!-- Pie Chart -->
                                <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#pieChart")).setOption({
                                            title: {
                                                text: 'Menu & Paket',
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
                                                        value: <?= $jmlMenu; ?>,
                                                        name: 'Menu'
                                                    },
                                                    {
                                                        value: <?= $jmlPaket; ?>,
                                                        name: 'Paket'
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
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <!-- <div class="col-lg-4">

            </div> -->
            <!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->