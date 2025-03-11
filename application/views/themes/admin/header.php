<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="<?= base_url() ?>assets/admin/images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="<?= base_url() ?>assets/admin/images/logo-mini.svg" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="dropdown-toggle-wrapper">
                        <div class="inner">
                            <img class="img-xs rounded-circle"
                                src="<?= base_url() ?>assets/admin/images/user/<?= $info->foto ?>" alt="Profile image">
                        </div>
                        <div class="inner">
                            <div class="inner">
                                <span class="profile-text font-weight-bold"><?= $info->nama ?></span>
                                <small class="profile-text small"><?= $role ?></small>
                            </div>
                            <div class="inner">
                                <div class="icon-wrapper">
                                    <i class="mdi mdi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <a class="dropdown-item mt-2">
                        Profiles
                    </a>
                    <a class="dropdown-item" onclick="ubahKataSandi(<?= $this->session->userdata('id_user') ?>)" >
                        Change Password
                    </a>
                    <a class="dropdown-item" onclick="keluar()" >
                        Sign Out
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->