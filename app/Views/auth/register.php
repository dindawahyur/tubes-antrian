<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Daftar</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
        }

        form {
            width: 35%;
        }

        .gambar {
            background-color: #54bceb;
            width: 65%;
            height: 900px;
            background-image: linear-gradient(rgba(23, 50, 253, 0.3), rgba(10, 232, 147, 0.3)), url(img/hs4.jpg);
            background-size: 120% 100%;
        }

        .form-control {
            border-radius: 30px;
            border: 2px solid #1732fd;
            font-size: smaller;
        }

        .btn {
            border-radius: 30px;
            background-image: linear-gradient(to bottom right, #0AE893, #1732fd);
            ;
        }
    </style>
</head>

<body>
    <div class="gambar"> </div>
    <!-- Default form login -->
    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="<?php echo base_url('/register/save') ?>" method="POST">

        <p class="h4 mb-4">Daftar</p>
        <?= $validation->listErrors(); ?>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nama depan" name="nama_depan" required>
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nama belakang" name="nama_belakang" required>
            </div>
        </div>

        <div class="form-group">
            <label for="tanggal" style="margin-left: 0; font-size: smaller;">Tanggal Lahir</label>
            <input type="date" name="ttl" class="form-control" id="tanggal" required>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <p><input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan" required>Perempuan</p>
            </div>
            <div class="form-check form-check-inline">
                <p><input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki" required>Laki-laki</p>
            </div>
        </div>
        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>

        <!-- Phone number -->
        <input type="tel" id="defaultRegisterPhonePassword" class="form-control" placeholder="Nomor Telepon" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="telp" required>
        <br>

        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" required>
        <p id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            Minimal 8 karakter
        </p>
        <!-- nanti kalo udah beres aku buat validasinya hehe -->
        <!-- <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Konfirmasi Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <br> -->

        <!-- Newsletter -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter" required>
            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Setuju dengan peraturan yang ada</label>
        </div>

        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Daftar</button>

        <!-- Social register -->
        <p>atau masuk dengan:</p>

        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook"></i></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>

        <hr>

        <!-- Terms of service -->
        <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

    </form>
    <!-- Default form register -->
    <!-- Default form login -->
    <script src="https://kit.fontawesome.com/cb5f198089.js" crossorigin="anonymous"></script>
</body>

</html>