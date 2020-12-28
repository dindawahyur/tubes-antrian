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
    <form class="text-center border border-light p-5" action="" method="">

        <p class="h4 mb-4">Form Pendaftaran Pasien</p>
        <hr>
        <p class="h5 mb-4" style="margin-top: 5%; text-align: left;">Data Diri Pasien</p>
        <!-- <button class="btn btn-info my-4 btn-block">Cek</button> -->
        <div class="form-group">
            <label for="pasien">Nama Pasien</label>
            <select class="form-control" name="nama_pasien">
                <?php foreach ($adaPasien as $p) : ?>
                    <option value="<?= $p['id'] ?>"><?= $p['nama_depan'] . " " . $p['nama_belakang']; ?></option>
                <?php endforeach; ?>
                <option value="baru">Daftarkan Pasien Baru</option>
            </select>
            <button class="btn btn-info my-4 btn-block" type="submit">Daftarkan Pasien Baru</button>
            <button class="btn btn-info my-4 btn-block" type="submit">Lanjutkan</button>
        </div>
        <p class="h5 mb-4" style="margin-top: 10%; text-align: left;">Perawatan yang Diminta</p>

        <div class="form-group">
            <label for="poli">Poliklinik</label>
            <select class="form-control" id="poli">
                <option>Pilih Poliklinik</option>
                <option>Poliklinik Gigi</option>
                <option>Poliklinik Anak</option>
                <option>Poliklinik THT</option>
                <option>Poliklinik Radiologi</option>
                <option>Dokter Umum</option>
                <option>Poliklinik Penyakit Dalam</option>
                <option>Poliklinik Kulit dan Kelamin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dokter">Dokter</label>
            <select class="form-control" id="dokter">
                <option>Pilih Dokter</option>
                <option>Dr. </option>
                <option>Dr. </option>
                <option>Dr.</option>
                <option>Dr.</option>
                <option>Dr.</option>
                <option>Dr.</option>
                <option>Dr.</option>
            </select>
        </div>

        <div class="form-group">
            <label for="jam">Jam Kunjungan</label>
            <select class="form-control" id="jam">
                <option>Pilih Jam Kunjungan</option>
                <option>08:00 WIB</option>
                <option>09:00 WIB</option>
                <option>10:00 WIB</option>
                <option>11:00 WIB</option>
            </select>
        </div>
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button>
    </form>
</div>
<?= $this->endSection(); ?>