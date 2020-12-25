<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title><?= $title; ?></title>

    <?= $this->renderSection('cssnya'); ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('/') ?>" style="color: aliceblue; font-weight: bold;">Rumah Sakit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse batas" id="navbarNavDropdown">
                <ul class="navbar-nav" style="margin-left: 15%;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/pages/index') ?>" style="color: white;">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan Rumah Sakit
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('/pendaftaran') ?>">Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="#">Data Poli</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="<?php echo base_url('/kontak') ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="#">Info Covid</a>
                    </li>
                </ul>


                <ul class="navbar-nav profil-nav" style="margin-left: 20%;">
                    <?php if (!session()->get('logged_in')) : ?>
                        <!-- kalo belum login -->
                        <a class="nav-link" style="color: white;" href="<?php echo base_url('/login') ?>">Login</a>

                    <?php else : ?>
                        <!-- kalo udah login -->
                        <i class="fas fa-user nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;"></i>
                        <ul class="dropdown-menu profil" aria-labelledby="navbarDropdownMenuLink1">
                            <li><a class="dropdown-item" href="#">Profil Anda</a></li>
                            <li><a class="dropdown-item" href="#">Riwayat Pengobatan</a></li>
                            <li><a class="dropdown-item" href="#">Bantuan</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/logout') ?>">Keluar</a></li>
                        </ul>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3 rs-footer">

                    <!-- Content -->
                    <h5 class="text-uppercase">Rumah Sakit</h5>
                    <hr style="background-color: white;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, fugit, accusantium enim non necessitatibus numquam reiciendis quia excepturi blanditiis natus distinctio cupiditate totam officiis sequi dolore! Perferendis, libero rerum! Alias?</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <hr style="background-color: white;">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Jalan xxxxxx No. xxxxx <br>Kota Bandung, Jawa Barat</p>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>+62 XXXX XXXX XX</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <p>rumahsakit@gmail.com</p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Sosial Media</h5>
                    <hr style="background-color: white;">
                    <ul class="list-unstyled sosmed">
                        <li>
                            <i class="fab fa-instagram"></i>
                            <a href="#!">rumah_sakit</a>
                        </li>
                        <li>
                            <i class="fab fa-twitter"></i>
                            <a href="#!">@rumah.sakit</a>
                        </li>
                        <li>
                            <i class="fab fa-facebook-f"></i>
                            <a href="#!">Rumah Sakit</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <p> DPM</p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script src="https://kit.fontawesome.com/cb5f198089.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>