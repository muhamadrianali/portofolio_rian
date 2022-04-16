<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <li class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-light fa-hotel"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hotel Rian</div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('index.php/admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>



            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/data_jenis_kamar'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Jenis Kamar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/data_kamar'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kamar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/data_user'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span></a>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/data_konsumen'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Konsumen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/data_transaksi'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaksi</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->