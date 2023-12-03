<main>
    <div class="container-fluid px-4">
        <?= $this->session->flashdata('pesan'); ?>
        <h1 class="mt-4">Selamat Datang</h1>
        <h3 class="mt-4">Profile Siswa</h3>
        <div class="card mb-3 bg-dark text-white" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/image/profile/') .
                                    $user['image']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">NIM : <?= $user['id_user']; ?></h5>
                        <p class="card-text">Nama : <?= $user['nama']; ?></p>
                        <p class="card-text">Kelas :<?= $user['kelas']; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>