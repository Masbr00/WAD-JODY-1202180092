<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->
    <div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Registrasi</h5>
                <hr></hr>
                <form>
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:80%" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>No. Handphone</label>
                        <input type="number" class="form-control" name="no_hp" style="width:80%" placeholder="Masukkan Nomor Handphone">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Daftar</button>
                        <br>
                        Sudah punya akun? <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>