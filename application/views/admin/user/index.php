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
                            <h3 class="mb-4 text-center">Setting Akun</h3>
                            <form method="post" action="<?= base_url("user/edit"); ?>">
                                <input name="id_user" value="<?= $user->id_user ?>" hidden>
                                <div class="mb-3">
                                    <label for="nama_user" class="form-label">Nama User</label>
                                    <input type="text" class="form-control" id="nama_user" name="nama_user" required value="<?= $user->nama_user ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required value="<?= $user->username ?>">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Update User</button>
                            </form>
                        </div>
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