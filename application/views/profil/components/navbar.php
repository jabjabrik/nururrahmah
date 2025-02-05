<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-9">
                    <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">+62 813-3427-6119</span></a>
                    <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">nururrahmah@gmail.com</span></a>
                </div>

                <div class="col-6 col-lg-3 text-right">
                    <a href="#" class="small mr-3">
                        <span class="icon-lock"></span>
                        Log In
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="sticky-nav js-sticky-header">
        <div class="container position-relative">
            <div class="site-navigation text-center">
                <img src="" alt="">
                <a href="<?= base_url('profil/beranda'); ?>" class="logo menu-absolute m-0">
                    <img src="<?= base_url('assets/images/logo.png'); ?>" height="35" width="35" alt="">
                    RA & MI Nurur Rahmah
                </a>
                <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                    <li class="<?= $title == 'Beranda' ? 'active' : ''; ?>"><a href="<?= base_url('profil/beranda'); ?>">Beranda</a></li>
                    <li class="<?= $title == 'Tentang' ? 'active' : ''; ?>"><a href="<?= base_url('profil/tentang'); ?>">Tentang</a></li>
                    <li class="<?= $title == 'Visi & Misi' ? 'active' : ''; ?>"><a href="<?= base_url('profil/visimisi'); ?>">Visi & Misi</a></li>
                    <li class="<?= $title == 'Galeri' ? 'active' : ''; ?>"><a href="<?= base_url('profil/galeri'); ?>">Galeri</a></li>
                    <li class="<?= $title == 'Alamat' ? 'active' : ''; ?>"><a href="<?= base_url('profil/alamat'); ?>">Alamat</a></li>
                </ul>
                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>