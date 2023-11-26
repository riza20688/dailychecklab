<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login Account</h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" value="<?= set_value('nim'); ?>" />
                                        <small class="text-danger pl-3"><?= form_error('nim'); ?></small>
                                        <label for="inputEmail">NIM</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                        <small class="text-danger pl-3"><?= form_error('password'); ?></small>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-grid mt-4 mb-0">
                                        <button class="btn btn-primary" href="index.html">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('auth/register') ?>">Buat Akun Disini !!</a></div>
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