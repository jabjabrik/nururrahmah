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
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h3 class="mb-4 text-center">Ubah Password</h3>
                            <form method="post" action="<?= base_url("user/password"); ?>">
                                <div class="mb-3">
                                    <label for="password1" class="form-label">Password Lama</label>
                                    <input type="password" class="form-control" id="password1" name="password1" value="<?= set_value('password1'); ?>">
                                    <?= form_error('password1', '<small class="text-danger pl-3 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="password2" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="password2" name="password2" value="<?= set_value('password2'); ?>">
                                    <?= form_error('password2', '<small class="text-danger pl-3 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="password3" class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="password3" name="password3" value="<?= set_value('password3'); ?>">
                                    <?= form_error('password3', '<small class="text-danger pl-3 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Ubah Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast -->
    <?php $this->view('admin/components/toasts'); ?>
    <!-- End Toast -->

    <!-- Script -->
    <?php $this->view('admin/components/script'); ?>
    <!-- End Script -->
</body>

</html>