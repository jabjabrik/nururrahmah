<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Nururrahmah | <?= $title ?></title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png'); ?>">
<link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest'); ?>">

<!-- Fonts and icons -->
<script src="<?= base_url("assets/admin/js/plugin/webfont/webfont.min.js") ?>"></script>
<script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["<?= base_url("assets/admin/css/fonts.min.css") ?>"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="<?= base_url("assets/admin/css/bootstrap.min.css") ?>" />
<link rel="stylesheet" href="<?= base_url("assets/admin/css/plugins.min.css") ?>" />
<link rel="stylesheet" href="<?= base_url("assets/admin/css/kaiadmin.min.css") ?>" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="<?= base_url("assets/admin/css/demo.css") ?>" />