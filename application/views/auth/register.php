<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register Daily Check Lab</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" value="<?= set_value('nim'); ?>">
                                                <small class="text-danger pl-3"><?= form_error('nim'); ?></small>
                                                <label for="nim">NIM</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="<?= set_value('nama'); ?>">
                                                <small class="text-danger pl-3"><?= form_error('nama'); ?></small>
                                                <label for="nama">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="kelas" name="kelas" type="text" placeholder="Kelas" value="<?= set_value('kelas'); ?>">
                                                <small class="text-danger pl-3"><?= form_error('kelas'); ?></small>
                                                <label for="kelas">Kelas</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="Password1" name="password1" type="password" placeholder="Password" />
                                                    <small class="text-danger pl-3"><?= form_error('password1'); ?></small>
                                                    <label for="inputPassword1">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="Password2" name="password2" type="password" placeholder="Confirm password" />
                                                    <label for="inputPassword2">Konfirmasi Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Create Account</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('auth'); ?>">Sudah Buat Akun ? Silahkan Login </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>