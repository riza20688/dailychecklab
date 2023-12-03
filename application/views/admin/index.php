<main>
    <div class="container-fluid px-4 flex">
        <h1 class="mt-4">Selamat Datang</h1>
        <div class="card mb-3" style="max-width: 540px;">
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard Admin</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <h3 class="card-body">Barang Bagus</h3>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="card-text"><?php echo $this->ModelBarang->countBarangBagus(); ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <h3 class="card-body">Barang Rusak Berat</h3>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="card-text"><?php echo $this->ModelBarang->countBarangRusak(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Laporan Masuk
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Bagus</th>
                                <th scope="col">Rusak</th>
                                <th scope="col">Diinput Oleh</th>
                                <th scope="col">Tanggal Input</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cek as $b) { ?>
                                <tr>
                                    <td><?= $b['id_cek']; ?></td>
                                    <td><?= $b['nm_barang']; ?></td>
                                    <td><?= $b['jumlah']; ?></td>
                                    <td><?= $b['bagus']; ?></td>
                                    <td><?= $b['rusak']; ?></td>
                                    <td><?= $b['id_user']; ?></td>
                                    <td><?= $b['tgl_cek']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>