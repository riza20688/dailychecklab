<main>
    <div class="card shadow-lg border-0 rounded-lg mt-2">
        <h3 class="text-center">DATA LAPORAN BARANG</h3>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Bagus</th>
                    <th scope="col">Rusak Berat</th>
                    <th scope="col">Diinput oleh</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pilihan</th>
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
                        <td>
                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa-solid fa-pencil"></i> Edit</a>
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
                                            <a href="<?= base_url('barang/hapuslaporan/') . $b['id_cek']; ?>" type="button" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog " method="post" action="<?= base_url('barang/editlaporan'); ?>">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="edit">Ubah Data Laporan Barang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input class="form-control mb-3" id="id_user" name="id_user" type="number" placeholder="Jumlah" value="<?= $b['id_cek']; ?>" readonly>
                                            <input class="form-control mb-3" id="jumlah" name="jumlah" type="number" placeholder="Jumlah" value="">
                                            <input class="form-control mb-3" id="bagus" name="bagus" type="number" placeholder="Bagus" value="">
                                            <input class="form-control mb-3" id="rusak" name="rusak" type="number" placeholder="Rusak" value="">
                                        </div>
                                        <div class="modal-footer">
                                            <a href="<?= base_url('barang/editlaporan') . $b['id_cek']; ?>" type="button" class="btn btn-danger">Ubah</a>
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
</main>