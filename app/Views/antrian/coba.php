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
<?php

// 		if(){
// 			echo "
// 			<script>
//                 swal({
//                 title: 'Login dulu!',
// 		     	text: 'Anda belum melakukan login',
// 		      	icon: 'error',
// 		      	button: 'Okay',
// 		      	confirmButtonColor: '#e64942',
//                 }).then(function() {
// 				    window.location = 'index.php';
// 				});
//             </script>
// 			";
// 		}

?>

<div class="daftar">
    <form class="text-center border border-light p-5" id="manual" action="<?= base_url('/pages/antrian/') ?>" method="POST">
        <p class=" h4 mb-4">Pendaftaran</p>

        <?php foreach ($pilih as $j) : ?>
            <div class="alert alert-success text-left" role="alert">
                <b><?= $j->poli; ?></b>
                <p><?= $j->dokter; ?></p>
                <?= $j->jam; ?> WIB
                <input type="hidden" name="jadwal" value="<?= $j->id_jadwal; ?>">
            </div>

        <?php endforeach; ?>

        <!-- Sign up button -->
        <!-- <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button> -->
        <label>Tanggal Periksa</label>
        <input class="form-control" type="date" name="tanggal"><br>

        <select class="form-control" name="pasien" id="sembunyi">
            <option value="awal">-- Pilih Pasien --</option>
            <?php foreach ($dataPasien as $pas) : ?>
                <option value="<?= $pas['id_pasien']; ?>"><?= $pas['nama_depan']; ?> <?= $pas['nama_belakang']; ?></option>
            <?php endforeach; ?>
        </select>

        <br>
        <div class="d-flex">
            <p class="btn btn-primary mr-2" onclick="dataBaru()">Pasien Baru</p>
            <input type="submit" class="btn btn-primary ml-2" value="Buat Janji">
        </div>
    </form>

    <form class="text-center border border-light p-5" style="display:none;" id="tambah" action="<?= base_url('/pages/PsAntrian/') ?>" method="POST">
        <p class=" h4 mb-4">Pendaftaran</p>

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
        <input class="form-control" type="date" id="myDate" name="tanggal" required><br>

        <br>
        <div class="addPasien" id="pasien">
            <p class="h4 mb-4">Form Pendaftaran Pasien</p>
            <?= $validation->listErrors(); ?>
            <hr>
            <p class="h5 mb-4" style="margin-top: 5%; text-align: left;">Data Diri Pasien</p>
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <label for="fname" style="text-align: left;">Nama Depan</label>
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nama depan" required name="nama_depan">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <label for="lname" style="margin-left: 0">Nama Belakang</label>
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nama belakang" required name="nama_belakang">
                </div>
            </div>
            <label for="nik" style="margin-left: 0">NIK</label>
            <input type="text" id="nik" class="form-control" placeholder="NIK" required name="nik">
            <br>
            <div class="form-group">
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- Tempat lahir -->
                        <label for="tempat_lahir" style="margin-left: 0">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" class="form-control" placeholder="Tempat lahir" required name="tempat">
                    </div>
                    <div class="col">
                        <!-- Tanggal name -->
                        <label for="tanggal" style="margin-left: 0">Tanggal Lahir</label>
                        <input type="date" name="tl" class="form-control" id="tanggal" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="gender" style="margin-left: 0">Jenis Kelamin</label>
                <br>
                <div class="form-check form-check-inline">
                    <p><input class="form-check-input" type="radio" name="gender" value="Perempuan" required>Perempuan</p>
                </div>
                <div class="form-check form-check-inline">
                    <p><input class="form-check-input" type="radio" name="gender" value="Laki-laki" required>Laki-laki</p>
                </div>
            </div>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- E-mail -->
                    <label for="email" style="text-align: left;">Email</label>
                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required name="email">
                </div>
                <div class="col">
                    <!-- Phone number -->
                    <label for="telepon" style="margin-left: 0">Nomor Telepon</label>
                    <input type="tel" id="defaultRegisterPhonePassword" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                </div>
            </div>

            <label for="pendidikan" style="margin-left: 0">Pendidikan Terakhir</label>
            <input type="text" id="pendidikan" class="form-control" placeholder="Pendidikan terakhir" required name="pendidikan">
            <br>

            <label for="pekerjaan" style="margin-left: 0">Pekerjaan</label>
            <input type="text" id="pekerjaan" class="form-control" placeholder="Pekerjaan" required name="pekerjaan">
            <br>
            <label for="bpjs" style="margin-left: 0">Nomor BPJS (jika menggunakan BPJS)</label>
            <input type="text" id="bpjs" class="form-control" placeholder="Nomor BPJS" name="bpjs">

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button>
        </div>
    </form>
</div>

<script>
    function dataBaru() {
        //document.getElementById('langsung').disabled = true;
        var sm = document.getElementById('manual');
        sm.style.display = 'none';

        var divPasien = document.getElementById('tambah');
        divPasien.style.display = 'block';

        var x = document.getElementById("myDate").autofocus;
    }


    function sweetAlert() {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Antrian pada tanggal tersebut sudah pebuh',
            confirmButtonColor: '#e64942',
        })
    }
</script>

<?= $this->endSection(); ?>