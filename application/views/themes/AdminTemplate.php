<!DOCTYPE html>
<html>
<!-- BEGIN : Head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title><?= APP_NAME ?></title>
    <!-- Google Fonts -->
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
        <?= $header ?>
        <div class="container-fluid page-body-wrapper">
            <?= $navbar ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $_config_content ?>

                </div>
                <!-- content-wrapper ends -->
                <?= $footer ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?= $modal ?>

    <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>    
    <script src="<?= base_url() ?>assets/admin/js/misc.js"></script>        
    <?= $js ?>
</body>
<!-- END : Body-->

</html>