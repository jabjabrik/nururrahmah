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
                            <h3 class="fw-bold mb-3">Galeri Kegiatan</h3>
                            <button type="button" class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('insert')">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button>
                        </div>
                    </div>
                    <table class="table datatable" style="white-space: nowrap; font-size: .9em;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($data_result as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td> <img class="rounded" width="150" src="<?= base_url("uploads/$item->foto") ?>" alt=""></td>
                                    <td><?= $item->deskripsi ?></td>
                                    <td>
                                        <?php $params = "[`$item->id_galeri`,`$item->deskripsi`]" ?>
                                        <button type="button" class="btn btn-icon btn-round btn-success" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('edit',<?= $params ?>)">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <a href="<?= base_url("galeri/delete/$item->id_galeri"); ?>" class="btn btn-icon btn-round btn-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_form" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-capitalize">Form Galeri Kegiatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <input name="id_galeri" id="id_galeri" hidden>
                            <div class="form-group col-12">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="foto" class="form-label">Upload Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" required accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button id="btn_submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script Form -->
    <script>
        const modal_form = document.querySelector('#modal_form');
        const btn_submit = modal_form.querySelector('#btn_submit');

        const setForm = (title, data) => {
            modal_form.querySelector('form').setAttribute('action', `<?= base_url('galeri') ?>/${title}`);
            const fields = ['id_galeri', 'deskripsi'];
            fields.forEach((e, i) => {
                const element = modal_form.querySelector(`#${e}`);
                element.value = title === 'insert' ? '' : data[i];
            })
        }
    </script>
    <!-- End Script Form -->

    <!-- Script -->
    <?php $this->view('admin/components/script'); ?>
    <!-- End Script -->
</body>

</html>