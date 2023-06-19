<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Product</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <a href="#" class="btn btn-warning mb-3">Tambah</a>
                <div class="row">
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