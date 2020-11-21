<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                    <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat Datang, <font class="text-primary">@nama</font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- content -->
    <div class="container my-5">
        <div class="card mx-auto border-0" style="width:65%">
            <div class="border rounded" style="background-image: linear-gradient( 89.8deg, rgba(48,180,164,1) 0.2%, rgba(118,255,238,1) 20%, rgba(192,255,247,1) 41.3%, rgba(246,224,96,1) 70.1%, rgba(223,173,54,1) 100% );">
                <br>
                <h1 class="mt-3" align="center">WAD Beauty</h1>
                <p class="mb-3"align="center">Tersedia Skincare dengan harga murah tapi bukan murahan dan berkualitas</p>
                <br>
            </div>
            <div class="card-body pt-0 px-3">
                <div class="row border rounded">
                    <div class="col card border-0 px-0">
                        <img class="card-img-top" src="assets/img/yuja.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <hr>
                            <p><b>Harga</b></p>
                        </div>
                    </div>
                    <div class="col card border-top-0 border-bottom-0 px-0">
                        <img class="card-img-top" src="assets/img/somebymi.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <hr>
                            <p><b>Harga</b></p>
                        </div>
                    </div>
                    <div class="col card border-0 px-0">
                        <img class="card-img-top" src="assets/img/toner.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                        <div class="card-body px-3">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <hr>
                            <p><b>Harga</b></p>
                        </div>
                    </div>
                </div>
                <div class="row border rounded" align="center">
                    <div class="col card border-0">
                        <a href="#" class="btn btn-primary btn-sm my-3" style="width:100%">Go somewhere</a>
                    </div>
                    <div class="col card border-top-0 border-bottom-0">
                        <a href="#" class="btn btn-primary btn-sm my-3" style="width:100%">Go somewhere</a>
                    </div>
                    <div class="col card border-0">
                        <a href="#" class="btn btn-primary btn-sm my-3" style="width:100%">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>