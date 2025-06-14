<html lang="en">

<head>
    <?php $this->view('admin/components/head'); ?>
</head>

<body style="background-color: #eaeaea;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="p-4 p-md-5 bg-white mt-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">LOGIN</h3>
                    <form action="<?= base_url("auth") ?>" method="POST" class="login-form">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control rounded-left" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control rounded-left" placeholder="Password" value="<?= set_value('password'); ?>">
                            <?= form_error('password', '<small class="text-danger pl-3 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
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