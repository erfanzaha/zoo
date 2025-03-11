<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <img src="<?= base_url() ?>assets/admin/images/user/<?= $info->foto ?>" alt="profile image">
            <p class="text-center font-weight-medium"><?= $info->nama ?></p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="menu-icon icon-diamond"></i>
                <span class="menu-title">Dashboard</span>                
            </a>
        </li>

        <?php if($role == "superadmin"): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/administrator') ?>">
                <i class="menu-icon icon-user"></i>
                <span class="menu-title">Administrator</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/pengelola') ?>">
                <i class="menu-icon icon-people"></i>
                <span class="menu-title">Pengelola</span>                
            </a>
        </li>
        <?php endif; 
        if($role == "superadmin" || $role == "pengelola"):
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/petugas') ?>">
                <i class="menu-icon icon-user-following"></i>
                <span class="menu-title">Petugas</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/pengunjung') ?>">
                <i class="menu-icon icon-emotsmile"></i>
                <span class="menu-title">Pengunjung</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/taman-marga-satwa') ?>">
                <i class="menu-icon icon-home"></i>
                <span class="menu-title">Taman Marga Satwa</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/wahana') ?>">
                <i class="menu-icon icon-game-controller "></i>
                <span class="menu-title">Wahana</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/kandang') ?>">
                <i class="menu-icon icon-eyeglass"></i>
                <span class="menu-title">Kandang</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/restoran') ?>">
                <i class="menu-icon icon-cup"></i>
                <span class="menu-title">Restoran</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/order') ?>">
                <i class="menu-icon icon-tag"></i>
                <span class="menu-title">Order</span>                
            </a>
        </li>
        <?php endif;
        if($role == "petugas"): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/scanned-tiket') ?>">
                <i class="menu-icon icon-frame"></i>
                <span class="menu-title">Scanned Tiket</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/scanned-wahana') ?>">
                <i class="menu-icon icon-frame"></i>
                <span class="menu-title">Scanned Wahana</span>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/scanned-restoran') ?>">
                <i class="menu-icon icon-frame"></i>
                <span class="menu-title">Scanned Restoran</span>                
            </a>
        </li>
        <?php endif; ?>
    </ul>
</nav>
<!-- partial -->