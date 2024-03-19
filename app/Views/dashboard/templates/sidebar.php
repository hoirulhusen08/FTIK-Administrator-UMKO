<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrasi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider m-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span></a>
    </li>

    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaksi Surat
        </div>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-envelope-fill"></i>
                <span>Surat Masuk</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-envelope-paper-fill"></i>
                <span>Surat Keluar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-postcard-heart-fill"></i>
                <span>Disposisi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-archive-fill"></i>
                <span>Pengarsipan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Informasi
        </div>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-file-text-fill"></i>
                <span>Pengajuan Surat</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pengaturan
        </div>

        <!-- Nav Item-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard/admin'); ?>">
                <i class="fas fa-users"></i>
                <span>Daftar Pengguna</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear-fill"></i>
                <span>Profil Instansi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-database-down"></i>
                <span>BackUp Database</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider m-0">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>