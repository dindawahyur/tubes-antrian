<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    nav {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
    }

    .navbar-nav {
        margin-left: 10%;
        color: white;
    }

    .nav-link {
        margin-right: 8px;
    }

    .dropdown-menu {
        margin-top: 7px;
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .dropdown-item:hover {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
        color: white;
    }

    .profil {
        margin-left: 80%;
        margin-top: 0px;
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .page {
        width: 100%;
        height: 100%;
        background-image: radial-gradient(circle at top right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg);
        background-size: 100% 100%;
    }

    .brand {
        color: white;
        font-weight: 800;
        font-size: 4rem;
        padding-top: 70px;
        margin-left: 50%;
    }

    .welcome {
        width: 393px;
        color: white;
        font-weight: 500;
        font-size: 1.5rem;
        text-align: justify;
        margin-left: 50.25%;
        padding-bottom: 100px;
    }

    .konten {
        width: 100%;
        display: flex;
        padding: 5%;
        align-items: center;
        justify-content: center;
    }

    .konten img {
        width: 50%;
    }

    .info h2 {
        color: #00d382;
    }

    .info hr {
        background-color: #00d382;
        opacity: 0.5;
    }

    .info p {
        text-align: justify;
    }

    .konten2 {
        width: 100%;
        padding: 3%;
        display: flex;
        justify-content: space-between;
        margin-bottom: 5%;
    }

    .card {
        width: 22%;
        margin: auto;
        height: 375px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: whitesmoke;
    }

    .card img {
        padding: 10%;
        width: 90%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .card h4 {
        margin-top: 10px;
        color: #0825fd;
        text-align: center;
    }

    .card p {
        padding: 5%;
        text-align: center;
    }

    h1 {
        color: #0825fd;
        text-align: center;
        font-weight: 700;
    }

    footer {
        background-image: radial-gradient(circle at bottom right, #00d382, #0825fd), url(img/hs4.jpg);
        color: white;
    }

    .fas {
        margin-right: 10px;
        margin-top: 7px;
    }

    .fab {
        margin-right: 10px;
        margin-top: 7px;
    }

    .list-unstyled li {
        display: flex;
    }

    .list-unstyled a {
        color: white;
    }

    .sosmed li {
        margin-bottom: 10px;
    }

    .rs-footer {
        margin-left: 13px;
        margin-right: -30px;
        text-align: justify;
        padding-right: 80px;
    }

    @media screen and (max-width: 427px) {
        body {
            overflow-x: hidden;
        }

        nav {
            width: 100%;
        }

        .batas {
            border-top: 1px solid white;
        }

        .navbar-nav {
            margin-left: 5%;
        }

        .profil-nav {
            margin-left: -20%;
        }

        .profil {
            margin-left: 0px;
            width: 220px;
        }

        .brand {
            margin: auto;
            margin-top: -5%;
            font-size: 3rem;
            text-align: center;
        }

        .welcome {
            width: 80%;
            margin: auto;
            font-size: 1rem;
            margin-bottom: 5%;
        }

        .konten {
            flex-direction: column;
            padding: 10%;
        }

        .konten img {
            width: 85%;
            margin-bottom: 30px;
        }

        .konten2 {
            flex-direction: column;
            margin-bottom: 5%;
        }

        .card {
            width: 85%;
            height: 90%;
            margin-top: 30px;
            padding: 5%;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="page">
    <p class="brand">Rumah Sakit</p>
    <p class="welcome">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facilis ab nesciunt. Perferendis, libero rerum!</p>
</div>

<div class="konten">
    <img src="<?php echo base_url('img/dc2.png') ?>" alt="rs">
    <div class="info">
        <h2>Rumah Sakit</h2>
        <hr>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quia hic, temporibus assumenda ut neque placeat reiciendis pariatur consequatur facere,
            dolorem quam excepturi illum labore harum fugiat cumque omnis nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, repellat! Vel cum illo quasi facere voluptatem accusamus.</p>
    </div>
</div>

<h1>Keunggulan Kami</h1>
<div class="konten2">
    <div class="card">
        <img style="width:80%" src="<?php echo base_url('img/ic.png') ?>" alt="">
        <h4>Fasilitas</h4>
        <p>Fasilitas rumah sakit yang memadai, sehingga memudahkan perawatan dan pengobatan pasien</p>
    </div>
    <div class="card">
        <img style="width:80%" src="<?php echo base_url('img/ic2.png') ?>" alt="">
        <h4>Tenaga Medis</h4>
        <p>Tenaga Medis yang berpengalaman dan terpercaya.</p>
    </div>
    <div class="card">
        <img style="width:80%" src="<?php echo base_url('img/ic3.png') ?>" alt="">
        <h4>Pelayanan</h4>
        <p>Pelayanan administrasi yang cepat dan simpel.</p>
    </div>
    <div class="card">
        <img style="width:80%" src="<?php echo base_url('img/ic4.png') ?>" alt="">
        <h4>Biaya</h4>
        <p>Biaya perawatan dan pengobatan yang terjangkau</p>
    </div>
</div>
<?= $this->endSection(); ?>