<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= APP_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="<?= APP_SUGGESTION ?>" name="description" />
    <meta content="nico lahara" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="<?= base_url() ?>assets/portal/images/favicon.png" />
    <!-- Vendor -->
    <!---Font Icon-->
    <link href="<?= base_url() ?>assets/portal/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/portal/font/flaticon.css" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link rel="icon" href="<?= base_url() ?>assets/portal/images/favicon.png" />
    <link href="<?= base_url() ?>assets/portal/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/portal/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portal/css/dd.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portal/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portal/css/menu.css">
    <!-- Theme Style -->
    <link href="<?= base_url() ?>assets/portal/css/style-2.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/portal/css/responsive-2.css" rel="stylesheet">
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="loading-center">
            <img src="<?= base_url() ?>assets/portal/images/white.gif" alt="">
        </div>
    </div>
    <!-- /Loader -->
    <a href="#" id="back-top-btn">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <?= $header ?>
    <?= $_config_content ?>
    <?= $footer ?>
    <?= $modal ?>
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/portal/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url() ?>assets/portal/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/isotope.pkgd.min.html"></script>
    <script src="<?= base_url() ?>assets/portal/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/menu-opener.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/waypoints.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/jquery.dd.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/Carousel.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/SmoothScroll.js"></script>

    <!-- custom -->

    <script src="<?= base_url() ?>assets/portal/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/menu.js"></script>

    <!-- <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script> -->
    <script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>    
    <script src="<?= base_url() ?>assets/admin/js/misc.js"></script> 
    <?= $js ?>
</body>

</html>