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
    <title>Akun</title>

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
            height: 100vh;
            background-image: linear-gradient(rgba(23, 50, 253, 0.3), rgba(10, 232, 147, 0.3)), url(img/hs4.jpg);
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
    <div class="gambar">

    </div>
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="<?php echo base_url('/login/auth') ?>" method="POST">

        <p class="h4 mb-4" style="font-weight: 0.3rem;">Masuk</p>
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Ingat saya?</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="" style="color:  #1732fd;">Lupa Password?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Masuk</button>

        <!-- Register -->
        <p>Belum Punya Akun?
            <a href="<?php echo base_url('/register') ?>" style="color: #1732fd">Daftar</a>
        </p>

        <!-- Social login -->
        <p>atau masuk dengan:</p>

        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook"></i></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>

    </form>
    <!-- Default form login -->
    <script src="https://kit.fontawesome.com/cb5f198089.js" crossorigin="anonymous"></script>
</body>

</html>