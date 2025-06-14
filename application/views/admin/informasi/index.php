<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->view('admin/components/head'); ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php $this->view('admin/components/sidebar'); ?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <!-- Header -->
            <?php $this->view('admin/components/header'); ?>
            <!-- End Header -->
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Informasi Sekolah</h3>
                        </div>
                    </div>
                    <form action="<?= base_url("informasi/edit"); ?>" method="post">
                        <div class="row">
                            <input name="id_informasi" value="<?= $informasi_sekolah->id_informasi ?>" hidden>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required value="<?= $informasi_sekolah->email ?>">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_telepon" class="form-label fw-bold">No. Telepon</label>
                                <input type="text" name="no_telepon" id="no_telepon" class="form-control" required value="<?= $informasi_sekolah->no_telepon ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="jumlah_siswa_ra" class="form-label fw-bold">Jumlah Siswa RA</label>
                                <input type="number" name="jumlah_siswa_ra" id="jumlah_siswa_ra" class="form-control" required value="<?= $informasi_sekolah->jumlah_siswa_ra ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="jumlah_siswa_mi" class="form-label fw-bold">Jumlah Siswa MI</label>
                                <input type="number" name="jumlah_siswa_mi" id="jumlah_siswa_mi" class="form-control" required value="<?= $informasi_sekolah->jumlah_siswa_mi ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="jumlah_guru" class="form-label fw-bold">Jumlah Guru</label>
                                <input type="number" name="jumlah_guru" id="jumlah_guru" class="form-control" required value="<?= $informasi_sekolah->jumlah_guru ?>">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="visi" class="form-label fw-bold">Visi</label>
                                <textarea name="visi" id="visi" rows="4" class="form-control" required><?= $informasi_sekolah->visi ?></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="misi" class="form-label fw-bold">Misi</label>
                                <textarea name="misi" id="misi" rows="4" class="form-control" required><?= $informasi_sekolah->misi ?></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="alamat" class="form-label fw-bold">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="4" class="form-control" required><?= $informasi_sekolah->alamat ?></textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update Informasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php $this->view('admin/components/script'); ?>
    <!-- End Script -->
</body>

</html>