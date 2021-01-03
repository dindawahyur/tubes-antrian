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
        color: #0AE893;
        font-weight: 800;
        text-align: center;
        padding-top: 5%;
    }

    .main {
        width: 100%;
        display: flex;
        padding: 5%;
        justify-content: center;
    }

    .main img {
        width: 50%;
    }

    .poli-card {
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 30px 30px;
    }

    .card {
        padding: 10%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card img {
        width: 70%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .card h4 {
        color: #00d382;
        margin-top: 10%;
        margin-bottom: 10%;
        text-align: center;
        font-weight: 700;
    }

    .card button {
        background-image: linear-gradient(to bottom right, #0AE893, #1732fd);
        border: none;
        border-radius: 30px;
        padding: 5%;
    }

    .card button a {
        text-decoration: none;
        color: white;
    }

    .card button:hover {
        background-image: linear-gradient(to bottom right, #0fb475, #0f23bd);
    }

    .search-box {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .search-box input {
        padding: 1%;
        width: 100%;
        border-radius: 30px;
        margin-bottom: 8%;
        border: 2px solid #0f23bd;
        padding-left: 5%;
    }

    .gambar img {
        width: 90%;
        margin-right: 10%;
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

        .poli-card {
            grid-template-columns: auto;
            justify-content: center;
        }

        .card {
            width: 80%;
            justify-content: center;
            margin: auto;
            margin-top: 10%;
        }

        .gambar img {
            margin-right: 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10%;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<h2>Pilih Poliklinik ...</h2>
<div class="container valign">
    <div class="main">
        <div class="gambar">
            <img src="<?php echo base_url('img/dc3.png') ?>" alt="">
        </div>
        <div class="konten">
            <div class="search-box">
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Poliklinik..." title="Type in a name">
            </div>
            <div class="poli-card">
                <?php foreach ($poliklinik as $poli) : ?>
                    <div class="card col-md-12">
                        <img src="<?php echo base_url('img/p2.png') ?>" alt="">
                        <h4 class="title"><?= $poli['poli']; ?></h4>
                        <div class="d-flex justify-content-between">
                            <button style="width: 48%;"><a href="<?php echo base_url('/pendaftaran') ?>">Daftar Berobat</a></button>
                            <button style="width: 48%;"><a href="<?= base_url('/pages/detailPoli/' . $poli['id_poliklinik']) ?>">Lihat Detail</a></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>