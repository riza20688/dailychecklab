<div class="row">
    <div class="container-fluid px-4">
        <div class="page-header">
            <h3 class="text-center">Data Siswa</h3>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($anggota as $b) { ?>
                            <tr>
                                <th scope="row"><?= $a++; ?></th>
                                <td><?= $b['id_user']; ?></td>
                                <td><?= $b['nama']; ?></td>
                                <td><?= $b['kelas']; ?></td>
                                <td><?= $b['is_active']; ?></td>
                                <td>
                                    <a href="<?= base_url('siswa/ubahstatus/') . $b['id_user']; ?>" onclick="returnconfirm('Kamu yakin akan menghapus ini ?')" class="btn btn-warning"><i class="fa-solid fa-pencil"></i> Edit</a>
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
                                                    <a href="<?= base_url('siswa/hapussiswa/') . $b['id_user']; ?>" type="button" class="btn btn-danger">Hapus</a>
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
    </div>