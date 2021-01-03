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

    h2 {
        color: #0825fd;
        font-weight: 800;
        text-align: center;
        padding-top: 5%;
        font-size: 3rem;
    }

    h3 {
        color: #0825fd;
        font-weight: 700;
    }

    hr {
        background-color: #0825fd;
        opacity: 0.5;
    }

    .main {
        display: flex;
        justify-content: space-around;
        padding: 5%;
    }

    .card {
        width: 30%;
        border: none;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .info {
        width: 50%;
    }

    .info p {
        text-align: justify;
    }

    .icon {
        display: flex;
    }

    .icon .fas {
        color: #0825fd;
        width: 5%;
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

        .main {
            flex-direction: column;
            margin-bottom: 10%;
        }

        h2 {
            margin-bottom: 10%;
        }

        .card {
            width: 90%;
            margin: auto;
            margin-bottom: 10%;
        }

        .info {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: auto;
            width: 90%;
            padding: 5%;
            border-radius: 5px;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<h2>Informasi Poliklinik</h2>
<div class="main">
    <div class="card">
        <img src="<?php echo base_url('img/rs4.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"><?= $poli['poli']; ?></p>
        </div>
    </div>
    <div class="info">
        <h3><?= $poli['poli']; ?></h3>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut sequi incidunt,
            iure deserunt architecto error ratione ab minima facilis minus enim fugiat, labore ad, unde optio et repellat tempore?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia ratione quam molestiae eum nesciunt, delectus veritatis.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam et debitis tempore sint atque nulla laboriosam aspernatur deleniti.
            Enim odio numquam maiores delectus sint minus beatae quis. Labore, vel ut.
        </p>
        <div class="icon">
            <i class="fas fa-procedures"></i>
            <p>Kode Ruangan : <?= $poli['deskripsi']; ?></p>
        </div>
        <div class="icon">
            <i class="fas fa-user-md"></i>
            <p>Dokter Spesialis : 45 orang</p>
        </div>
        <div class="icon">
            <i class="fas fa-notes-medical"></i>
            <p>Pasien/hari : 2 orang</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>