<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    body {
        background-image: radial-gradient(circle at top left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg);
    }

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

    form {
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 50%;
        background-color: white;
        border-top-left-radius: 30px;
        border-bottom-right-radius: 30px;
        box-shadow: 2px 2px 7px 7px rgba(61, 61, 61, 0.4);

    }

    .form-control {
        border-radius: 30px;
        border: 2px solid #1732fd;
        font-size: smaller;
    }

    label {
        margin-left: 0;
    }

    .btn {
        margin: auto;
        width: 50%;
        border-radius: 30px;
        background-image: linear-gradient(to bottom right, #0AE893, #1732fd);
        ;
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
        nav {
            width: 440px;
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

        form {
            width: 90%;
            padding: -5px;
        }

        .form-row {
            flex-direction: column;
        }

        .col {
            margin-bottom: 10px;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="daftar">
    <form class="text-center border border-light p-5" action="<?= base_url('/pages/antrian/') ?>" method="POST">
        <p class=" h4 mb-4">Form Pendaftaran Pasien</p>

        <?php foreach ($pilih as $j) : ?>
            <div class="alert alert-success text-left" role="alert">
                <b>Poliklinik<?= $j->poli; ?></b>
                <p>Dokter <?= $j->dokter; ?></p>
                <?= $j->jam; ?> WIB
                <input type="hidden" name="jadwal" value="<?= $j->id_jadwal; ?>">
            </div>

        <?php endforeach; ?>

        <!-- Sign up button -->
        <!-- <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button> -->
        <label>Tanggal Periksa</label>
        <input class="form-control" type="date" name="tanggal"><br>

        <select class="form-control" name="pasien">
            <option value="awal">-- Pilih Pasien --</option>
            <?php foreach ($dataPasien as $pas) : ?>
                <option value="<?= $pas['id_pasien']; ?>"><?= $pas['nama_depan']; ?> <?= $pas['nama_belakang']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <div class="d-flex">
            <a href="<?= base_url('/pasien') ?>" class=" btn btn-primary mr-2">Pasien Baru</a>
            <input type="submit" class="btn btn-primary ml-2" value="Buat Janji">
        </div>
    </form>
</div>

<?= $this->endSection(); ?>