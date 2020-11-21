<?php
session_start();
include_once('function/config.php');
$database = new database();

if (isset($_SESSION['is_login'])) {
    header('location:index.php');
}

if (isset($_COOKIE['email'])) {
    $database->relogin($_COOKIE['email']);
    header('location:index.php');
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['remember'])) {
        $remember = TRUE;
    }
    else {
        $remember = FALSE;
    }

    if ($database->login($email,$password,$remember)) {
        header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body style="background-color:#e9f9fe">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- content -->
    <div class="container my-3">
        <div class="card centered mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Login</h5>
                <hr></hr>
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-check ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="form-group mt-3" align="center">
                        <button type="submit" name="login" class="btn btn-primary mb-2">Login</button>
                        <br>
                        Belum punya akun? <a href="register.php">Registrasi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>