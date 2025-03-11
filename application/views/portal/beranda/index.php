<!--================================================
                       BANNER PART START
    ==================================================-->
<section class="banner" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 banner-center">
                <div class="banner-text">
                    <h3>we are visting Bukit Peninsula</h3>
                    <h2>Destination Ideas</h2>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="reservation-form" class="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="reserve">
                    <div class="reservation-tabs">

                        <ul class="nav nav-tabs search-opt">
                            <li><a href="#hotels-tab" class="active" data-toggle="tab">hotels</a></li>
                            <li class=""><a href="#flights-tab" data-toggle="tab">flight</a></li>
                            <li class=""><a href="#car-tab" data-toggle="tab">Cars</a></li>
                            <li class=""><a href="#cruise-tab" data-toggle="tab">Cruise</a></li>
                            <li class=""><a href="#packages-tab" data-toggle="tab">Packages</a></li>
                            <li class=""><a href="#holiday-tab" data-toggle="tab">Holiday</a></li>
                        </ul>

                    </div>
                    <div class="tab-content">
                        <form id="hotels-tab" class="tab-pane form-inline reservation-hotel active" method="post"
                            name="reservationform">
                            <div class="row">
                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker1" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <form id="flights-tab" class="tab-pane form-inline reservation-hotel" method="post"
                            name="reservationform">
                            <div class="row">

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker2" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker3" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller1" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination1" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <form id="car-tab" class="tab-pane form-inline reservation-hotel" method="post"
                            name="reservationform">
                            <div class="row">

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker4" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker5" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination2" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller2" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <form id="cruise-tab" class="tab-pane form-inline reservation-hotel" method="post"
                            name="reservationform">
                            <div class="row">
                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination3" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker6" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker7" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller3" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <form id="packages-tab" class="tab-pane form-inline reservation-hotel" method="post"
                            name="reservationform">
                            <div class="row">
                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination4" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker8" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker9" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller4" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <form id="holiday-tab" class="tab-pane form-inline reservation-hotel" method="post"
                            name="reservationform">
                            <div class="row">

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door"></i>
                                                Check in
                                            </label>
                                            <input type="text" id="datepicker10" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-door-1"></i>
                                                Check out
                                            </label>
                                            <input type="text" id="datepicker11" data-provide="datepicker"
                                                class="field-input calendar-input" placeholder="dd/mm/yy">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-2 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">
                                            <label><i class="flaticon-tourist"></i>
                                                Travelers
                                            </label>
                                            <input type="text" id="traveller5" class="field-input" value="Travelers"
                                                onfocus="if(this.value  == 'Travelers') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Travelers'; } " />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 step-where">
                                    <div class="form-group">
                                        <div class="content-checkin-data">

                                            <label><i class="flaticon-location"></i>
                                                Going to
                                            </label>
                                            <input type="text" id="destination5" class="field-input"
                                                value="Croatia, Istria, Pula, holiday house"
                                                onfocus="if(this.value  == 'Croatia, Istria, Pula, holiday house') { this.value = ''; } "
                                                onblur="if(this.value == '') { this.value = 'Croatia, Istria, Pula, holiday house'; } " />
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="banner-btn">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!--********************* Flight reservation ********************-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
        End: banner
    ============================= -->

<!-- =============================
        Start: service Part
    ============================= -->
<section id="service" class="service">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="service-inner border-col">
                    <img src="<?= base_url() ?>assets/portal/images/service-icon-1.png" class="img-fluid" alt="">
                    <div class="ser-text">
                        <h2>Unlimited adventures await</h2>
                        <p>Travels & stay in the best accommodation</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-inner border-col">
                    <img src="<?= base_url() ?>assets/portal/images/service-icon-2.png" class="img-fluid" alt="">
                    <div class="ser-text">
                        <h2>globally connected</h2>
                        <p>Over 1 million options to choose from</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-inner border-col">
                    <img src="<?= base_url() ?>assets/portal/images/service-icon-3.png" class="img-fluid" alt="">
                    <div class="ser-text">
                        <h2>Always the Best Pricing</h2>
                        <p>Transparency Guaranteed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-inner special-ser">
                    <img src="<?= base_url() ?>assets/portal/images/service-icon-4.png" class="img-fluid" alt="">
                    <div class="ser-text">
                        <h2>Reliable & Convenient Technology</h2>
                        <p>Secured rates on our easy to use platform</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- =============================
        End: service Part
    ============================= -->

<!-- =============================
        Start: Top Deals 
    ============================= -->

<section id="top-deal" class="top-deal section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="heading color">

                    <h2>Today's top deals</h2>
                    <img src="<?= base_url() ?>assets/portal/images/header-border.png" alt="shap" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row top-day-slick">
            <div class="col-lg-12 text-left">
                <div class="todays-inner">
                    <div class="today-off">
                        <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/top-deal-1.jpg" alt="place">
                        <p>30% off</p>
                    </div>
                    <div class="today-txt">
                        <h3>Batu Caves temple within cave
                            in Kuala Lumpur, Malaysia</h3>
                        <p>with upto30% off, experience Malaysia
                            with your way</p>
                        <h5>$ 70 <span>$ 100</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="todays-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/top-deal-2.jpg" alt="place">
                    <div class="today-txt">
                        <h3>The Old Bridge in Mostar, Bosnia</h3>
                        <p>you’ve hit the jackpot with tese Bosnia and Herzegovina vacation deals</p>
                        <h5>$ 385</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="todays-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/top-deal-3.jpg" alt="place">
                    <div class="today-txt">
                        <h3>Grand Canal and Basilica Santa Maria della Salute, Venice, Italy</h3>
                        <p>Using the Tripakin.com app to enjoy & stay for less!</p>
                        <h5>$ 190</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="todays-inner">
                    <div class="today-off">
                        <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/top-deal-2.jpg" alt="place">
                        <p>30% off</p>
                    </div>
                    <div class="today-txt">
                        <h3>The Old Bridge in Mostar, Bosnia</h3>
                        <p>you’ve hit the jackpot with tese Bosnia and Herzegovina vacation deals</p>
                        <h5>$ 147 <span>$ 210</span></h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =============================
        End: Top Deals
    ============================= -->
<!-- =============================
        Start: Recomended Hotels
    ============================= -->

<section id="recomended" class="recomended">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="heading color">

                    <h2>Recomended Hotels</h2>
                    <img src="<?= base_url() ?>assets/portal/images/header-border.png" alt="shap" class="img-fluid">
                </div>
            </div>

        </div>
        <div class="row recomended-slick">
            <div class="col-lg-12 text-left">
                <div class="recomand-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/recomand-hotel-image-1.jpg" alt="Choose us">
                    <h3>The Hotel Maria Cristina
                        San Sebastian, Spain</h3>

                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h5>$ 147 <span>$ 210</span></h5>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="recomand-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/recomand-hotel-image-2.jpg" alt="Choose us">
                    <h3>Belmond Grand Hotel Timeo
                        Taormina, Italy</h3>

                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h5>$ 370</h5>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="recomand-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/recomand-hotel-image-3.jpg" alt="Choose us">
                    <h3>Planters Inn, Charleston
                        South Carolina</h3>

                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h5>$ 70 <span>$ 100</span></h5>
                </div>
            </div>
            <div class="col-lg-12 text-left">
                <div class="recomand-inner">
                    <img class="img-fluid" src="<?= base_url() ?>assets/portal/images/recomand-hotel-image-2.jpg" alt="Choose us">
                    <h3>Belmond Grand Hotel Timeo,
                        South Carolina</h3>

                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h5>$ 240</h5>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =============================
        End: Recomended Hotels
    ============================= -->


<!-- =============================
        Start: Popular Destinations
    ============================= -->

<section id="popular" class="popular">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading color">

                    <h2>Popular Destination</h2>
                    <img src="<?= base_url() ?>assets/portal/images/header-border.png" alt="shap" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto col-12 text-center">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-menu active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                            aria-controls="pills-all" aria-selected="true">Asia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" id="pills-illustrations-tab" data-toggle="pill" href="#pills-illustrations"
                            role="tab" aria-controls="pills-illustrations" aria-selected="false">africa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu midl-btn" id="pills-logo-tab" data-toggle="pill" href="#pills-logo"
                            role="tab" aria-controls="pills-logo" aria-selected="false">north america</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" id="pills-web-tem-tab" data-toggle="pill" href="#pills-web-tem" role="tab"
                            aria-controls="pills-web-tem" aria-selected="false">South america</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" id="pills-busi-card-tab" data-toggle="pill" href="#pills-busi-card"
                            role="tab" aria-controls="pills-busi-card" aria-selected="false">Europ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu last-btn" id="pills-flyer-tab" data-toggle="pill" href="#pills-flyer"
                            role="tab" aria-controls="pills-flyer" aria-selected="false">Australia</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-lg-12 px-0">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row mx-0 justify-content-center text-center">
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-4.jpg" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Capilano Suspension Bridge</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Denali National Park</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-3.jpg" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Ik-Kil Cenote, Chichen Itza</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-2.png" class="img-fluid" alt=""></a>


                            <div class="port-text">
                                <p>Eiffel Tower</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-1.png" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Niagra Water Falls</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-illustrations" role="tabpanel"
                    aria-labelledby="pills-illustrations-tab">
                    <div class="row mx-0">
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-2.png" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Eiffel Tower</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-3.jpg" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Ik-Kil Cenote, Chichen Itza</p>

                            </div>
                        </div>
                        <div class="port_img">
                            <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                            <div class="port-text">
                                <p>Denali National Park</p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-1.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Niagra Water Falls</p>

                        </div>
                    </div>

                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-4.jpg" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Capilano Suspension Bridge</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Denali National Park</p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web-tem" role="tabpanel" aria-labelledby="pills-web-tem-tab">
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Denali National Park</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-3.jpg" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Ik-Kil Cenote, Chichen Itza</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-2.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Eiffel Tower</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-1.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Niagra Water Falls</p>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-busi-card" role="tabpanel" aria-labelledby="pills-busi-card-tab">
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-4.jpg" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Alaska, America</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-2.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Eiffel Tower</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Denali National Park</p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-flyer" role="tabpanel" aria-labelledby="pills-flyer-tab">
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-3.jpg" class="img-fluid" alt=""></a>
                        <div class="port-text">
                            <p>Ik-Kil Cenote, Chichen Itza</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-1.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Niagra Water Falls</p>

                        </div>
                    </div>
                    <div class="port_img">
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/destination-image-5.png" class="img-fluid" alt=""></a>

                        <div class="port-text">
                            <p>Denali National Park</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
        End: Popular Destinations
    ============================= -->
<!-- =============================
        Start: News Letter
    ============================= -->
<section id="news" class="newsletter">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-11 news-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="news-text">
                            <h3>Subscribe to Our Newsletter</h3>
                            <p>If you Subscribe to our newsletter, we’ll send you the best deals for you and updates.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="subscribe-search">
                            <form action="#">
                                <div class="input-group">
                                    <input type="email" id="destination13" class="field-input" value="Your e-mail here"
                                        onfocus="if(this.value  == 'Your e-mail here') { this.value = ''; } "
                                        onblur="if(this.value == '') { this.value = 'Your e-mail here'; } " />
                                    <span class="input-group-btn">
                                        <a class="button-form">Subscribe</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============================
        End: News Letter
    ============================= -->

<!-- =============================
        Start: Our Articles
    ============================= -->

<section id="artical" class="artical">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="heading color">
                    <h2>Our Articles</h2>
                    <img src="<?= base_url() ?>assets/portal/images/header-border.png" alt="shap" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row artical-slick">
            <div class="col-md-12">
                <div class="artical-inner">
                    <div class="row">
                        <div class="col-md-6 artical-img">
                            <div class="">
                                <img src="<?= base_url() ?>assets/portal/images/artical-image-1.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6 border-artical">
                            <div class="artical-content">
                                <h6>23 Oct 2019</h6>
                                <h2>World’s Best Places which you ever seen are here</h2>
                                <a href="blog-details.html">Read more</a>
                                <ul>
                                    <li><i class="fa fa-thumbs-up"></i><span>1.7k</span></li>
                                    <li><i class="fa fa-comments"></i><span>1k</span></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="artical-inner">
                    <div class="row">
                        <div class="col-md-6 artical-img">
                            <div class="">
                                <img src="<?= base_url() ?>assets/portal/images/artical-image-2.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6 border-artical">
                            <div class="artical-content">
                                <h6>26 Feb 2020</h6>
                                <h2>Mountain beautiful Houses which like you most</h2>
                                <a href="blog-details.html">Read more</a>
                                <ul>
                                    <li><i class="fa fa-thumbs-up"></i><span>1.7k</span></li>
                                    <li><i class="fa fa-comments"></i><span>1k</span></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="artical-inner">
                    <div class="row">
                        <div class="col-md-6 artical-img">
                            <div class="">
                                <img src="<?= base_url() ?>assets/portal/images/artical-image-1.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6 border-artical">
                            <div class="artical-content">
                                <h6>28 Jan 2020</h6>
                                <h2>World’s Best Places which you ever seen are here</h2>
                                <a href="blog-details.html">Read more</a>
                                <ul>
                                    <li><i class="fa fa-thumbs-up"></i><span>1.7k</span></li>
                                    <li><i class="fa fa-comments"></i><span>1k</span></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =============================
        End: Our Articles
    ============================= -->