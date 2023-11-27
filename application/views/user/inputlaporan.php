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
                                    <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" value="-">

                                    <label for="nim">NIM</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="-">

                                    <label for="nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="kelas" name="kelas" type="text" placeholder="Kelas" value="-">

                                    <label for="kelas">Kelas</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="Password1" name="password1" type="password" placeholder="Password" />

                                        <label for="password1">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="Password2" name="password2" type="password" placeholder="Confirm password" />
                                        <label for="password2">Konfirmasi Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Create Account</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>