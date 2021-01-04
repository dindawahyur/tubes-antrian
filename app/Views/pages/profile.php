<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    body {
        background-image: radial-gradient(circle at top left, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg);
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

    form {
        margin: auto;
        width: 55%;
        margin-top: 7%;
        margin-bottom: 7%;
        background-color: whitesmoke;
        border-radius: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .form-control {
        border-radius: 30px;
        border: 2px solid #1732fd;
        font-size: smaller;
    }

    .btn {
        border-radius: 30px;
        width: 30%;
        background-image: linear-gradient(to bottom right, #0AE893, #1732fd);
        ;
    }

    .btn:hover {
        background-image: linear-gradient(to bottom right, #0fb475, #0f23bd);
    }

    .h4 {
        font-weight: 800;
        color: #0f23bd;
        font-size: 2rem;
    }

    .main hr {
        background-color: #0f23bd;
        opacity: 0.5;
        margin-bottom: 5%;
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

        form {
            width: 90%;
            padding: -10%;
        }

        .main hr {
            margin-bottom: 15%;
        }

        .form-row {
            flex-direction: column;
        }

        .col {
            margin-bottom: 10px;
        }

        .btn {
            width: 120px;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="main">
    <form class="border border-light p-5" action="#!">

        <p class="h4 mb-4">Profil Anda</p>
        <hr>
        <label style="margin-left: 0; font-size: smaller;">Nama Lengkap</label>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nama depan" value="<?= $user['nama_depan']; ?>" disabled>
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nama belakang" value="<?= $user['nama_belakang']; ?>" disabled>
            </div>
        </div>
        <div class=" form-group">
            <label for="tanggal" style="margin-left: 0; font-size: smaller;">Tanggal Lahir</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $user['ttl']; ?>" disabled>
        </div>
        <label for="gender" style="margin-left: 0; font-size: smaller;">Jenis Kelamin</label>
        <div class="form-group">
            <input type="text" name="tanggal" class="form-control" id="tanggal" value="<?= $user['gender']; ?>" disabled>
            <!-- <div class="form-check form-check-inline">
                <p><input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan" <?php if ($user['gender'] == 'Perempuan') : echo 'checked';
                                                                                                            endif; ?>>Perempuan</p>
            </div>
            <div class="form-check form-check-inline">
                <p><input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki" <?php if ($user['gender'] == 'Laki-laki') : echo 'checked';
                                                                                                            endif; ?>>Laki-laki</p>

            </div> -->
        </div>
        <!-- E-mail -->
        <label style="margin-left: 0; font-size: smaller;">Nomor Telepon</label>
        <input type="tel" id="defaultRegisterPhonePassword" class="form-control" placeholder="Nomor Telepon" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="<?= $user['telp']; ?>" disabled>
        <br>
        <label style="margin-left: 0; font-size: smaller;">Email</label>
        <input type=" email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" value="<?= $user['email']; ?>" disabled>

        <!-- Password -->
        <!-- <input style=" margin-bottom: 10%;" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"> -->
        <!-- Phone number -->

        <!-- Sign up button -->
        <a href="<?= base_url('/pages/ubahProfile/' . $user['id']) ?>" class="btn" style="color: white;">Edit Profil</a>
    </form>
</div>
<?= $this->endSection(); ?>