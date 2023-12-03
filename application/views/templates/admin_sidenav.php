<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-house-user"></i></div>
                        Dashboard
                    </a>
                    <hr class="sidebar-divider">
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="<?= base_url('barang'); ?>">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-folder"></i></div>
                        Input Data Barang
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/ceksiswa'); ?>">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-folder"></i></div>
                        Data Siswa
                    </a>
                    <a class="nav-link" href="<?= base_url('barang/laporanbarang'); ?>">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-folder"></i></div>
                        Lihat Laporan
                    </a>
                    <hr class="sidebar-divider">
                    <div class="sb-sidenav-menu-heading">Profile</div>
                    <a class="nav-link" href="<?=
                                                base_url('auth/logout'); ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $user['nama']; ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">