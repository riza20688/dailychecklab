<main>
    <div class="container">
        <div class="card shadow-lg border-0 rounded-lg mt-2">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Input Barang Lab</h3>
            </div>
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('barang'); ?>">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="id" name="id" type="number" placeholder="Nama" value="">
                            <small class="text-danger pl-3"><?= form_error('id'); ?></small>
                            <label for="nama">Id Barang</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="">
                            <small class="text-danger pl-3"><?= form_error('nama'); ?></small>
                            <label for="nama">Nama Barang</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="stok" name="stok" type="number" placeholder="Stok" value="">
                            <small class="text-danger pl-3"><?= form_error('stok'); ?></small>
                            <label for="nama">Jumlah</label>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button type="submit" class="btn btn-success btn-block" href="login.html">Simpan</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($barang as $b) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $b['id']; ?></td>
                            <td><?= $b['nm_barang']; ?></td>
                            <td><?= $b['stok']; ?></td>
                            <td><?= date('d F Y', $b['tgl_masuk']); ?></td>
                            <td>
                                <a href="<?= base_url('barang/hapusbarang/') . $b['id']; ?>" onclick="returnconfirm('Kamu yakin akan menghapus ini ?')" class="btn btn-warning"><i class="fa-solid fa-pencil"></i> Edit</a>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="fas fa-trash"></i> Hapus</a>
                                <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="hapusModalLabel">Notifikasi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin Mau dihapus ?
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?= base_url('barang/hapusbarang/') . $b['id']; ?>" type="button" class="btn btn-danger">Hapus</a>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>