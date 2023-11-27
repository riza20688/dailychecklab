<main>
    <div class="container-fluid px-4 flex">
        <h1 class="mt-4">Selamat Datang</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4 mx-3 mb-3 ">
                    <h5 class="card-title">Profile Siswa</h5>
                    <img src="<?= base_url('assets/image/profile/') .
                                    $user['foto']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-body">
                        <h5 class="card-title">NIM : <?= $user['nim']; ?></h5>
                        <h5 class="card-title">Nama : <?= $user['nama']; ?></h5>
                        <h5 class="card-title">Kelas : <?= $user['kelas']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Laporan yang dibuat
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Dilaporkan oleh</th>
                            <th>Kelas</th>
                            <th>Tanggal Cek</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</main>