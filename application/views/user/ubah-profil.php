<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-1 rounded-lg mt-2">
                    <?= form_open_multipart('user/ubahprofil'); ?>
                    <div class="form-group row mb-3 mt-2 mx-auto">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $user['id_user']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3 mt-2 mx-auto">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-3 mt-2 mx-auto">
                        <div class="col-sm-2">Gambar</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?=
                                                base_url('assets/image/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10 mb-2">
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <button class="btn btn-dark"> Kembali</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
</main>
<!-- End of Main Content -->