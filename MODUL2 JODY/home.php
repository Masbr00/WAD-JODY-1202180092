<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>Home</title>
</head>
<body class="bg-white">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->
    <!-- content -->
    <form action="booking.php" method="post">
        <div class="container mt-2 mx-auto">
            <h1 class="text-info" style="text-align: center;font-size:24px;">EAD HOTEL<br></h1>
            <h2 class="text-info mb-5 text-center" style=";font-size:20px;">Welcome To 5 Star Hotel</h2>
            <div class="row mx-auto">
                <!-- room standart -->
                <div class="col text-center">
                    <div class="card ml-auto shadow" style="width: 14rem;">
                        <img class="card-img-top mx-auto" src="assets/img/standart.jpeg" alt="Card image cap" style="height:auto;width:222px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Standart</h5>
                            <h5 class="card-subtitle text-center text-info mb-3">$ 90/Day</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light">Facilities</li>
                            <li class="list-group-item bg-white">1 Single Bed</li>
                            <li class="list-group-item bg-light">1 Bathroom</li>
                        </ul>
                        <div class="card-body">
                        <form action="booking.php" method="post">
                            <button type="submit" value="Standart" name="tombol" class="btn btn-primary">Book Now</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end of room standart -->
                <!-- room superior -->
                <div class="col text-center">
                    <div class="card mx-auto shadow" style="width: 14rem;">
                        <img class="card-img-top mx-auto" src="assets/img/superior.jpg" alt="Card image cap" style="height:auto;width:222px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Superior</h5>
                            <h5 class="card-subtitle text-center text-info mb-3">$ 150/Day</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light">Facilities</li>
                            <li class="list-group-item bg-white">1 Double Bed</li>
                            <li class="list-group-item bg-light">1 Television and Wi-Fi</li>
                            <li class="list-group-item bg-light">1 Workroom</li>
                        </ul>
                        <div class="card-body">
                        <form action="booking.php" method="post">
                            <button type="submit" value="Superior" name="tombol" class="btn btn-primary">Book Now</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end of room superior -->
                <!-- room luxury -->
                <div class="col text-center">
                    <div class="card mr-auto shadow" style="width: 14rem;">
                        <img class="card-img-top mx-auto" src="assets/img/luxury.jpg" alt="Card image cap" style="height:auto;width:222px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Luxury</h5>
                            <h5 class="card-subtitle text-center text-info mb-3">$ 200/Day</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light">Facilities</li>
                            <li class="list-group-item bg-white">2 Double Bed</li>
                            <li class="list-group-item bg-light">2 Bathroom with hot water</li>
                            <li class="list-group-item bg-light">1 kitchen</li>
                            <li class="list-group-item bg-light">1 Television and Wi-Fi</li>
                            <li class="list-group-item bg-light">1 Workroom</li>
                        </ul>
                        <div class="card-body">
                        <form action="booking.php" method="post">
                            <button type="submit" value="Luxury" name="tombol" class="btn btn-primary">Book Now</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end of room luxury -->
            </div>
        </div>
    </form>
    <!-- end content -->
</body>
</html>