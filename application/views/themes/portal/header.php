<!--================================================
                       Header PART START
    ==================================================-->
<section id="header" class="header_area sticky-top">
    <!-- Header nav AREA CSS -->
    <!--Header Top-->

    <div class="container hidden-main">
        <div class="row">
            <div class="col-md-2 logo">
                <img src="<?= base_url() ?>assets/portal/images/header-logo-2.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 text-right">
                <div class="row justify-content-end d-flex">
                    <div class="col-md-9">

                        <div class="header_top custom_nav right_info text-right">
                            <ul>                                
                                <li class="login">
                                    <?= $opsi ?>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <nav id="nav-part" class="navbar header-nav other-nav navbar-expand-md">
                            <div class="container">

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link active" href="<?= base_url('/') ?>">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#top-deal">Taman Marga Satwa</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id='cssmenu' class="hidden mobile">
        <div>
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url() ?>assets/portal/images/header-logo-2.png" class="img-fluid" alt="">
            </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button tog-nav">
            <i class="more-less fa fa-align-right"></i>

        </div>

        <ul>
            <li class="nav-item"><a class="nav-link active" href="#banner">Home</a></li>
            <li><a href="#top-deal">Top Deal</a></li>
            <li><a href="#recomended">Recomanded hotels</a></li>
            <li><a href="#popular">popular destination</a></li>

            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

</section>
<!--================================================
                       Header PART End
    ==================================================-->