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
                            <h3 class="fw-bold mb-3">Pengumuman PPDB <?= $pengumuman == '1' ? 'Dibuka' : 'Ditutup' ?></h3>
                            <a href="<?= base_url("ppdb/pengumuman_change/$pengumuman"); ?>" class="btn btn-sm btn-<?= $pengumuman == '1' ? 'danger' : 'primary' ?>"><?= $pengumuman == '1' ? 'Tutup' : 'Buka' ?> Pengumuman</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 0.8em;">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NISN</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>JK</th>
                                    <th>Status</th>
                                    <th>Tanggal Diterima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($data_result as $item) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item->nama_lengkap ?></td>
                                        <td><?= $item->nisn ?></td>
                                        <td><?= $item->tempat_lahir ?></td>
                                        <td><?= date('d/m/Y', strtotime($item->tanggal_lahir)) ?></td>
                                        <td><?= $item->jenis_kelamin ?></td>
                                        <td><?= $item->status_diterima ?></td>
                                        <td><?= $item->tanggal_diterima ? date('d/m/y', strtotime($item->tanggal_diterima)) : '' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php $this->view('admin/components/script'); ?>
    <!-- End Script -->
</body>

</html>