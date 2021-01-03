<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    nav {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
    }

    body {
        background-image: radial-gradient(circle at top left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg);
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

    .main {
        padding: 5%;
    }

    .card {
        padding: 5%;
        display: flex;
        flex-direction: row;
        margin-top: 5%;
        justify-content: space-evenly;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border: none;
    }

    .nomor {
        display: flex;
        align-items: center;
    }

    .nomor h1 {
        color: #0825fd;
    }

    .info {
        display: flex;
        align-items: center;
        width: 40%;
    }

    .gambar {
        width: 50%;
    }

    .gambar img {
        width: 100%;
    }

    h2 {
        text-align: center;
        color: white;
        font-weight: 800;
        font-size: 3rem;
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

        .h2 {
            font-size: 1rem;
        }

        .card {
            flex-direction: column;
        }

        .gambar {
            width: 100%;
        }

        .nomor h1 {
            font-size: 2rem;
            margin: auto;
            margin-bottom: 5%;
        }

        .info {
            width: 100%;
            text-align: justify;
            margin-top: 5%;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container main">
    <h2>Tata Cara Pendaftaran Pengobatan</h2>
    <div class="card">
        <div class="nomor">
            <h1>1.</h1>
        </div>
        <div class="gambar">
            <img src="img/login.png" alt="">
        </div>
        <div class="info">
            <p>Pastikan Anda sudah masuk ke akun Rumah Sakit Anda.
                <br> Jika belum, silakan tekan <strong>Login</strong> pada menu navigasi.
                <br> Jika sudah, silakan lanjut ke langkah 5.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>2.</h1>
        </div>
        <div class="gambar">
            <img src="img/log.png" alt="">
        </div>
        <div class="info">
            <p>Masukkan informasi akun Anda berupa email dan password yang digunakan saat mendaftar akun Rumah Sakit.
                <br> Jika belum mempunyai akun, silakan tekan <strong>Daftar</strong> pada bagian bawah form.
                <br> Jika sudah memiliki akun, silakan tekan tombol <strong>Masuk</strong> dan lanjut ke langkah 5.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>3.</h1>
        </div>
        <div class="gambar">
            <img src="img/reg.png" alt="">
        </div>
        <div class="info">
            <p>Jika Anda belum mempunyai akun, silakan masukkan informasi-informasi yang tertera pada form pendaftaran akun.
                <br> Lalu tekan tombol <strong>Daftar</strong>.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>4.</h1>
        </div>
        <div class="gambar">
            <img src="img/log.png" alt="">
        </div>
        <div class="info">
            <p>Cobalah untuk <strong>Masuk</strong> ke akun yang sudah Anda daftarkan tadi.
                <br>Tekan tombol <strong>Masuk</strong>.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>5.</h1>
        </div>
        <div class="gambar">
            <img src="img/cari.png" alt="">
        </div>
        <div class="info">
            <p>Tekan menu <strong>Layanan Rumah Sakit</strong> dan pilih submenu <strong>Cari Dokter</strong>
                untuk melakukan pendaftaran pengobatan.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>6.</h1>
        </div>
        <div class="gambar">
            <img src="img/pilihpoli.png" alt="">
        </div>
        <div class="info">
            <p>Silakan pilih poliklinik atau dokter yang dituju.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>7.</h1>
        </div>
        <div class="gambar">
            <img src="img/pilihjam.png" alt="">
        </div>
        <div class="info">
            <p>Lalu, pilih dokter dan jam prakteknya untuk melakukan penjadwalan pengobatan.
                <br>Tekan perintah <strong>Buat Janji</strong>.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>8.</h1>
        </div>
        <div class="gambar">
            <img src="img/pilihtgl.png" alt="">
        </div>
        <div class="info">
            <p>Anda akan diarahkan ke halaman untuk menentukan tanggal.
                <br>Jika pasien sudah pernah melakukan pendaftaran pengobatan di akun Rumah Sakit ini, carilah identitas pasien pada data pasien.
                <br>Tekan perintah <strong>Buat Janji</strong> dan lanjut ke langkah 10.
                <br>Jika belum pernah, tekan perintah <strong>Pasien Baru</strong>.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>9.</h1>
        </div>
        <div class="gambar">
            <img src="img/mskpasien.png" alt="">
        </div>
        <div class="info">
            <p>Masukkan data pasien baru sesuai form yang disediakan.
                <br>Tekan perintah <strong>Kirim</strong>.
            </p>
        </div>
    </div>
    <div class="card">
        <div class="nomor">
            <h1>10.</h1>
        </div>
        <div class="gambar">
            <img src="img/riwayat.png" alt="">
        </div>
        <div class="info">
            <p>Anda akan diarahkan ke halaman <strong>Riwayat Pengobatan</strong>.
                <br>Pendaftaran pengobatan telah berhasil.
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>