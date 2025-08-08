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
                            <h3 class="fw-bold mb-3">Pendaftaran PPDB</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 0.8em;">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Panggilan</th>
                                    <th>NISN</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>JK</th>
                                    <th>Agama</th>
                                    <th>Anak Ke</th>
                                    <th>Status Anak</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>TK Asal</th>
                                    <th>Alamat TK</th>
                                    <th>SD Asal</th>
                                    <th>Alamat SD</th>
                                    <th>Nama Ayah</th>
                                    <th>Pekerjaan Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Pekerjaan Ibu</th>
                                    <th>Pendidikan Ortu</th>
                                    <th>Penghasilan Ayah</th>
                                    <th>Penghasilan Ibu</th>
                                    <th>Nama Ayah Wali</th>
                                    <th>Nama Ibu Wali</th>
                                    <th>Pekerjaan Wali</th>
                                    <th>Pendidikan Wali</th>
                                    <th>Penghasilan Wali</th>
                                    <th>Foto</th>
                                    <th>Akta</th>
                                    <th>KK</th>
                                    <th>KTP Ortu</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Tanggal Diterima</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($data_result as $item) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item->nama_lengkap ?></td>
                                        <td><?= $item->nama_panggilan ?></td>
                                        <td><?= $item->nisn ?></td>
                                        <td><?= $item->tempat_lahir ?></td>
                                        <td><?= date('d/m/y', strtotime($item->tanggal_lahir)) ?></td>
                                        <td><?= $item->jenis_kelamin ?></td>
                                        <td><?= $item->agama ?></td>
                                        <td><?= $item->anak_ke ?></td>
                                        <td><?= $item->status_anak ?></td>
                                        <td><?= $item->alamat ?></td>
                                        <td><?= $item->no_hp ?></td>
                                        <td><?= $item->nama_ra_tk_asal ?></td>
                                        <td><?= $item->alamat_ra_tk_asal ?></td>
                                        <td><?= $item->nama_sd_mi_asal ?></td>
                                        <td><?= $item->alamat_sd_mi_asal ?></td>
                                        <td><?= $item->nama_ayah ?></td>
                                        <td><?= $item->pekerjaan_ayah ?></td>
                                        <td><?= $item->nama_ibu ?></td>
                                        <td><?= $item->pekerjaan_ibu ?></td>
                                        <td><?= $item->pendidikan_ortu ?></td>
                                        <td><?= number_format($item->penghasilan_ayah, 0, ',', '.');  ?></td>
                                        <td><?= number_format($item->penghasilan_ibu, 0, ',', '.');  ?></td>
                                        <td><?= $item->nama_ayah_wali ?></td>
                                        <td><?= $item->nama_ibu_wali ?></td>
                                        <td><?= $item->pekerjaan_wali ?></td>
                                        <td><?= $item->pendidikan_terakhir ?></td>
                                        <td><?= $item->penghasilan_wali ?></td>
                                        <td><a target="_blank" href="<?= base_url("uploads/$item->foto_3x4"); ?>">Unduh</a></td>
                                        <td><a target="_blank" href="<?= base_url("uploads/$item->akta_kelahiran"); ?>">Unduh</a></td>
                                        <td><a target="_blank" href="<?= base_url("uploads/$item->kartu_keluarga"); ?>">Unduh</a></td>
                                        <td><a target="_blank" href="<?= base_url("uploads/$item->ktp_ortu"); ?>">Unduh</a></td>
                                        <td><?= $item->tahun_ajaran ?></td>
                                        <td><?= $item->status_diterima ?></td>
                                        <td><?= $item->tanggal_diterima ? date('d/m/y', strtotime($item->tanggal_diterima)) : '' ?></td>
                                        <td>
                                            <a href="<?= base_url("ppdb/delete/$item->id_siswa"); ?>" class="btn btn-outline-danger">
                                                Hapus
                                            </a>
                                            <?php if (!$item->status_diterima): ?>
                                                <a href="<?= base_url("ppdb/penerimaan/diterima/$item->id_siswa"); ?>" class="btn btn-outline-primary">
                                                    <i class="ti ti-circle-check"></i> Terima
                                                </a>
                                                <a href="<?= base_url("ppdb/penerimaan/tidak/$item->id_siswa"); ?>" class="btn btn-outline-danger">
                                                    <i class="ti ti-x"></i> Tidak Diterima
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal Detail (contoh untuk satu siswa) -->
                    <?php foreach ($data_result as $item) : ?>
                        <div class="modal fade" id="detailModal<?= $item->id_siswa ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel">Detail Siswa: <?= $item->nama_lengkap ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Data Pribadi</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <th width="40%">Nama Lengkap</th>
                                                        <td><?= $item->nama_lengkap ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Panggilan</th>
                                                        <td><?= $item->nama_panggilan ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TTL</th>
                                                        <td>
                                                            <?= $item->tempat_lahir ?>,
                                                            <?= date('d/m/Y', strtotime($item->tanggal_lahir)) ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td><?= $item->jenis_kelamin ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Agama</th>
                                                        <td><?= $item->agama ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Anak Ke</th>
                                                        <td><?= $item->anak_ke ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Anak</th>
                                                        <td><?= $item->status_anak ?></td>
                                                    </tr>
                                                </table>

                                                <h6 class="mt-4">Kontak</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <th width="40%">Alamat</th>
                                                        <td><?= $item->alamat ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No HP</th>
                                                        <td><?= $item->no_hp ?></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>Data Sekolah</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <th width="40%">Nomor Induk Asal</th>
                                                        <td><?= $item->nomor_induk_asal ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>NISN</th>
                                                        <td><?= $item->nisn ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>RA/TK Asal</th>
                                                        <td>
                                                            <?= $item->nama_ra_tk_asal ?>
                                                            <?php if ($item->alamat_ra_tk_asal): ?>
                                                                <br><small><?= $item->alamat_ra_tk_asal ?></small>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>SD/MI Asal</th>
                                                        <td>
                                                            <?= $item->nama_sd_mi_asal ?>
                                                            <?php if ($item->alamat_sd_mi_asal): ?>
                                                                <br><small><?= $item->alamat_sd_mi_asal ?></small>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <h6 class="mt-4">Data Orang Tua</h6>
                                                <table class="table table-sm">
                                                    <tr>
                                                        <th width="40%">Nama Ayah</th>
                                                        <td><?= $item->nama_ayah ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pekerjaan Ayah</th>
                                                        <td><?= $item->pekerjaan_ayah ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Penghasilan Ayah</th>
                                                        <td><?= $item->penghasilan_ayah ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Ibu</th>
                                                        <td><?= $item->nama_ibu ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pekerjaan Ibu</th>
                                                        <td><?= $item->pekerjaan_ibu ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Penghasilan Ibu</th>
                                                        <td><?= $item->penghasilan_ibu ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pendidikan Ortu</th>
                                                        <td><?= $item->pendidikan_ortu ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <?php if ($item->nama_ayah_wali || $item->nama_ibu_wali): ?>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <h6>Data Wali</h6>
                                                    <table class="table table-sm">
                                                        <tr>
                                                            <th width="20%">Nama Ayah Wali</th>
                                                            <td><?= $item->nama_ayah_wali ?></td>
                                                            <th width="20%">Pekerjaan Wali</th>
                                                            <td><?= $item->pekerjaan_wali ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Ibu Wali</th>
                                                            <td><?= $item->nama_ibu_wali ?></td>
                                                            <th>Pendidikan Terakhir</th>
                                                            <td><?= $item->pendidikan_terakhir ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Penghasilan Wali</th>
                                                            <td colspan="3"><?= $item->penghasilan_wali ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h6>Dokumen</h6>
                                                <ul>
                                                    <li>Foto 3x4: <?= $item->foto_3x4 ?></li>
                                                    <li>Akta Kelahiran: <?= $item->akta_kelahiran ?></li>
                                                    <li>Kartu Keluarga: <?= $item->kartu_keluarga ?></li>
                                                    <li>KTP Ortu: <?= $item->ktp_ortu ?></li>
                                                    <?php if ($item->dokumen_tambahan): ?>
                                                        <li>Dokumen Tambahan: <?= $item->dokumen_tambahan ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php $this->view('admin/components/script'); ?>
    <!-- End Script -->
</body>

</html>