<main>

    <div class="card shadow-lg border-0 rounded-lg mt-2">
        <div class="card-header">
            <?= $this->session->flashdata('message'); ?>
            <h3 class="text-center font-weight-light my-4">Input Check Barang Lab</h3>
        </div>
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('cekbarang'); ?>">
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <select name="nama" class="form-control form-control-user">
                            <option value="">Pilih Barang</option>
                            <?php
                            foreach ($barang as $k) { ?>
                                <option value="<?= $k['nm_barang']; ?>"><?=
                                                                        $k['nm_barang']; ?></option>
                            <?php } ?>
                        </select>
                        <small class="text-danger pl-3"><?= form_error('nama'); ?></small>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-auto mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="jumlah" name="jumlah" type="number" placeholder="Stok" value="">
                            <small class="text-danger pl-3"><?= form_error('jumlah'); ?></small>
                            <label for="stokk">Jumlah</label>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="bagus" name="bagus" type="number" placeholder="Stok" value="">
                            <small class="text-danger pl-3"><?= form_error('bagus'); ?></small>
                            <label for="bagus">Bagus</label>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="form-floating">
                            <input class="form-control" id="rusak" name="rusak" type="number" placeholder="Stok" value="">
                            <small class="text-danger pl-3"><?= form_error('rusak'); ?></small>
                            <label for="rusak">Rusak Berat</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button type="submit" class="btn btn-success btn-block" href="login.html">Simpan</button></div>
                </div>
            </form>
        </div>
    </div>

</main>