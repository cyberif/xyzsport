<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Product</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $jmlproduct; ?></h6>
                                        <span class="text-primary small pt-1 fw-bold">Results</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Tabel Data Siswa -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">Product Datas</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col" class="text-center">ID Products</th>
                                            <th scope="col" class="text-center">Category</th>
                                            <th scope="col" class="text-center">Merk</th>
                                            <th scope="col" class="text-center">Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($products as $p) { ?>
                                            <tr>
                                                <th scope="row" class="text-center"><?= $i++; ?></th>
                                                <td class="text-center"><?= $p['id_product']; ?></td>
                                                <td class="text-center"><?= $p['category']; ?></td>
                                                <td class="text-center"><?= $p['merk']; ?></td>
                                                <td class="text-center"><?= $p['stok']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Tabel Data Siswa -->


                    </>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                </div><!-- End Right side columns -->

            </div>
    </section>

</main><!-- End #main -->