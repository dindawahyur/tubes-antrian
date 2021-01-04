<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css') ?>">
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="<?php echo base_url('/admin') ?>"><b>RUMAH SAKIT</b></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Akun</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mr-2 text-success"></i>Admin</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('/logout') ?>">
                                <i class="mr-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/admin') ?>">
                            <span class="menu-title ">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/admin/antrian') ?>">
                            <span class="menu-title">Antrian</span>
                        </a>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/admin/dokter') ?>">
                            <span class="menu-title">Dokter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/admin/jadwal') ?>">
                            <span class="menu-title">Jadwal Dokter</span>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/admin/pasien') ?>">
                            <span class="menu-title">Pasien</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <?= $this->renderSection('content'); ?>
        </div>

    </div>

    <script src="<?php echo base_url('/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?php echo base_url('/js/off-canvas.js') ?>"></script>
</body>

</html>