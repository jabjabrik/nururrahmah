<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('profil/components/head') ?>
    <style>
        .dark-form {
            background-color: #2c3e50;
            color: #ecf0f1;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .dark-form .form-control {
            background-color: #34495e;
            border-color: #7f8c8d;
            color: #ecf0f1;
        }

        .dark-form .form-control:focus {
            background-color: #415b76;
            border-color: #d4d400;
            color: #ecf0f1;
            box-shadow: 0 0 0 0.25rem rgba(212, 212, 0, 0.25);
        }

        .dark-form .form-label {
            color: #d4d400;
        }

        .dark-form .btn-primary {
            background-color: #d4d400;
            border-color: #d4d400;
            color: #2c3e50;
            font-weight: bold;
        }

        .dark-form .btn-primary:hover {
            background-color: #c4c400;
            border-color: #c4c400;
        }

        .section-title {
            color: #d4d400;
            border-bottom: 2px solid #d4d400;
            padding-bottom: 10px;
            margin-bottom: 20px;
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
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Formulir <br> <span style="color: #d4d400;">Pendaftaran RA & MI Nurur Rahmah</span></h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p>Isi data dengan lengkap dan benar</p>
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
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('profil/pendaftaran_insert'); ?>" class="dark-form p-4 p-md-5" enctype="multipart/form-data">
                    <h3 class="section-title">Data Calon Siswa</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nomor_induk_asal" class="form-label">Nomor Induk Asal</label>
                            <input type="text" class="form-control" id="nomor_induk_asal" name="nomor_induk_asal">
                        </div>
                        <div class="col-md-6">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn">
                        </div>
                        <div class="col-md-4">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="col-md-4">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        <div class="col-md-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih...</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-control" id="agama" name="agama" required>
                                <option value="">Pilih...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="anak_ke" class="form-label">Anak Ke-</label>
                            <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
                        </div>
                        <div class="col-md-4">
                            <label for="status_anak" class="form-label">Status Anak</label>
                            <select class="form-control" id="status_anak" name="status_anak" required>
                                <option value="">Pilih...</option>
                                <option value="Kandung">Kandung</option>
                                <option value="Angkat">Angkat</option>
                                <option value="Tiri">Tiri</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="tel" class="form-control" id="no_hp" name="no_hp">
                        </div>
                    </div>

                    <h3 class="section-title mt-5">Data Sekolah Asal</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_ra_tk_asal" class="form-label">Nama RA/TK Asal</label>
                            <input type="text" class="form-control" id="nama_ra_tk_asal" name="nama_ra_tk_asal">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat_ra_tk_asal" class="form-label">Alamat RA/TK Asal</label>
                            <input type="text" class="form-control" id="alamat_ra_tk_asal" name="alamat_ra_tk_asal">
                        </div>
                        <div class="col-md-6">
                            <label for="nama_sd_mi_asal" class="form-label">Nama SD/MI Asal</label>
                            <input type="text" class="form-control" id="nama_sd_mi_asal" name="nama_sd_mi_asal">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat_sd_mi_asal" class="form-label">Alamat SD/MI Asal</label>
                            <input type="text" class="form-control" id="alamat_sd_mi_asal" name="alamat_sd_mi_asal">
                        </div>
                    </div>

                    <h3 class="section-title mt-5">Data Orang Tua</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pendidikan_ortu" class="form-label">Pendidikan Terakhir</label>
                            <select class="form-control" id="pendidikan_ortu" name="pendidikan_ortu" required>
                                <option value="">Pilih...</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1-D3">D1-D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="penghasilan_ayah" class="form-label">Penghasilan Ayah</label>
                            <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" required>
                                <option value="">Pilih...</option>
                                <option value="< 1 juta">
                                    < 1 juta</option>
                                <option value="1-3 juta">1-3 juta</option>
                                <option value="3-5 juta">3-5 juta</option>
                                <option value="5-10 juta">5-10 juta</option>
                                <option value="> 10 juta">> 10 juta</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="penghasilan_ibu" class="form-label">Penghasilan Ibu</label>
                            <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu">
                                <option value="">Pilih...</option>
                                <option value="< 1 juta">
                                    < 1 juta</option>
                                <option value="1-3 juta">1-3 juta</option>
                                <option value="3-5 juta">3-5 juta</option>
                                <option value="5-10 juta">5-10 juta</option>
                                <option value="> 10 juta">> 10 juta</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                            </select>
                        </div>
                    </div>

                    <h3 class="section-title mt-5">Data Wali (Jika Berbeda dengan Orang Tua)</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_ayah_wali" class="form-label">Nama Ayah Wali</label>
                            <input type="text" class="form-control" id="nama_ayah_wali" name="nama_ayah_wali">
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ibu_wali" class="form-label">Nama Ibu Wali</label>
                            <input type="text" class="form-control" id="nama_ibu_wali" name="nama_ibu_wali">
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                            <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                        </div>
                        <div class="col-md-6">
                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir Wali</label>
                            <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                <option value="">Pilih...</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1-D3">D1-D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="penghasilan_wali" class="form-label">Penghasilan Wali</label>
                            <select class="form-control" id="penghasilan_wali" name="penghasilan_wali">
                                <option value="">Pilih...</option>
                                <option value="< 1 juta">
                                    < 1 juta</option>
                                <option value="1-3 juta">1-3 juta</option>
                                <option value="3-5 juta">3-5 juta</option>
                                <option value="5-10 juta">5-10 juta</option>
                                <option value="> 10 juta">> 10 juta</option>
                            </select>
                        </div>
                    </div>

                    <h3 class="section-title mt-5">Dokumen Pendukung</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="foto_3x4" class="form-label">Foto 3x4</label>
                            <input type="file" class="form-control" id="foto_3x4" name="foto_3x4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="akta_kelahiran" class="form-label">Akta Kelahiran</label>
                            <input type="file" class="form-control" id="akta_kelahiran" name="akta_kelahiran" required>
                        </div>
                        <div class="col-md-6">
                            <label for="kartu_keluarga" class="form-label">Kartu Keluarga</label>
                            <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" required>
                        </div>
                        <div class="col-md-6">
                            <label for="ktp_ortu" class="form-label">KTP Orang Tua/Wali</label>
                            <input type="file" class="form-control" id="ktp_ortu" name="ktp_ortu" required>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="persetujuan" required>
                                <label class="form-check-label" for="persetujuan">
                                    Saya menyatakan bahwa data yang diisi adalah benar dan dapat dipertanggungjawabkan
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Daftar Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php $this->load->view('profil/components/footer') ?>
    <!-- End Footer -->

    <!-- Script -->
    <?php $this->load->view('profil/components/script') ?>
    <!-- End Script -->
</body>

</html>