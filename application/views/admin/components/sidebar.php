<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="<?= base_url("dashboard"); ?>" class="logo">
                <img src="<?= base_url("assets/images/logo.png") ?>" alt="navbar brand" class="navbar-brand" height="50" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>">
                        <i class="fas fa-home"></i>
                        <p>Halaman Beranda</p>
                    </a>
                </li>
                <li class="nav-section">
                    <h4 class="text-section">Informasi</h4>
                </li>
                <li class="nav-item <?= $title == "Informasi" ? "active" : ""; ?>">
                    <a href="<?= base_url("informasi"); ?>">
                        <i class="far fa-building"></i>
                        <p>Informasi Sekolah</p>
                    </a>
                </li>
                <li class="nav-item <?= $title == "Galeri" ? "active" : ""; ?>">
                    <a href="<?= base_url("galeri"); ?>">
                        <i class="far fa-chart-bar"></i>
                        <p>Galeri Kegiatan</p>
                    </a>
                </li>
                <li class="nav-section">
                    <h4 class="text-section">Akun</h4>
                </li>
                <li class="nav-item <?= $title == "User" ? "active" : ""; ?>">
                    <a href="<?= base_url("user"); ?>">
                        <i class="fas fa-user"></i>
                        <p>Setting User</p>
                    </a>
                </li>
                <li class="nav-item <?= $title == "Ubah Password" ? "active" : ""; ?>">
                    <a href="<?= base_url("user/password"); ?>">
                        <i class="fas fa-fingerprint"></i>
                        <p>Ubah Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("auth/logout"); ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>