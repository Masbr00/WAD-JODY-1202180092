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
<body class="bg-white">
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

    <!-- content -->
    <div class="container my-3">
        <div class="card centered mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2 class="card-title" align="center">Profile</h2>
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Warna Navbar</label>
                        <div class="col-sm-10">
                            <select id="select-color" name="warna_nav">
                                <option value="#f8f9fa">Light</option>
                                <option value="#343a40">Dark</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>