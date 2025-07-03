<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('profil/components/head') ?>
    <style>
        .pengumuman-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .status-diterima {
            background-color: #d4edda;
            border-left: 5px solid #28a745;
        }

        .status-tidak-diterima {
            background-color: #f8d7da;
            border-left: 5px solid #dc3545;
        }

        .card-siswa {
            transition: transform 0.3s;
        }

        .card-siswa:hover {
            transform: translateY(-5px);
        }

        .badge-status {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <!-- NavBar -->
    <?php $this->load->view('profil/components/navbar') ?>
    <!-- End NavBar -->

    <div class="untree_co-hero overlay" style="background-image: url('<?= base_url('assets/images/img-9.jpg') ?>');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Pengumuman <br> <span style="color: #d4d400;">Penerimaan Siswa</span></h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p>Hasil seleksi penerimaan siswa baru RA & MI Nurur Rahmah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="pengumuman-container p-4 p-md-5 mb-5">
                    <h2 class="text-center mb-4">Pengumuman PPDB</h2>
                    <!-- Daftar Siswa -->
                    <div class="row" id="siswaContainer">
                        <?php foreach ($pengumuman as $item): ?>
                            <div class="col-md-6 mb-4 siswa-item">
                                <div class="card card-siswa text-white h-100 <?= $item->status_diterima == 'diterima' ? 'status-diterima' : 'status-tidak-diterima' ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-black"><?= $item->nama_lengkap ?></h5>
                                            <span class="badge <?= $item->status_diterima == 'diterima' ? 'bg-success' : 'bg-danger' ?> badge-status">
                                                <?= $item->status_diterima ?>
                                            </span>
                                        </div>
                                        <p class="card-text">
                                            <small class="text-black">Asal Sekolah: <?= $item->nama_sd_mi_asal ?: $item->nama_ra_tk_asal ?></small><br>
                                        </p>
                                        <?php if ($item->status_diterima == 'diterima'): ?>
                                            <div class="alert alert-success mt-2 p-2">
                                                <small class="fw-bold">Selamat anda telah diterima!</small>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php $this->load->view('profil/components/footer') ?>
    <!-- End Footer -->

    <!-- Script -->
    <?php $this->load->view('profil/components/script') ?>
</body>

</html>