<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= APP_NAME ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-two">
                <div class="row d-flex align-items-stretch">
                    <?= $_config_content ?>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/misc.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/settings.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/todolist.js"></script>
    <?= $js ?>
</body>

</html>