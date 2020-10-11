<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>Booking</title>
</head>
<body class="bg-white">
    <!-- php -->
    <?php
        $kamar = NULL;
        if(isset($_POST['standart'])) { 
            $kamar = 'standart';
        } 
        if(isset($_POST['superior'])) { 
            $kamar = "superior";
        }
        if(isset($_POST['luxury'])) { 
            $kamar = "luxury";
        }
    ?>
    <!-- end of php -->
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->
    <!-- content -->
    <div class="container mt-2 mx-auto">
        <div class="row mx-auto mt-5">
            <!-- formulir -->
            <div class="col">
                <div class="card mx-auto shadow" style="width: 21rem;">
                    <div class="card-body">
                        <div class="card-text">
                        <!-- form -->
                        <form method="post">
                            <!-- nama -->
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <!-- end of nama -->
                            <!-- cek in -->
                            <div class="form-group">
                                <label for="check_in">Check-In</label>
                                <input type="date" class="form-control" id="check_in" name="check-in">
                            </div>
                            <!-- end of cek in -->
                            <!-- durasi -->
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="number" class="form-control" id="duration" name="duration">
                                <small id="durationHelp" class="form-text text-muted">Days</small>
                            </div>
                            <!-- end of durasi -->
                            <!-- kamar -->
                            <div class="form-group">
                                <label for="room_type">Room Type</label>
                                <?php
                                if(isset($_POST['standart'])) { 
                                    echo '<select class="custom-select custom-select-lg" id="room_type" name="room_type" disabled>';
                                    echo '<option value="Standart">Standart</option>';
                                    echo '<option value="Superior">Superior</option>';
                                    echo '<option value="Luxury">Luxury</option>';
                                    echo '</select>';
                                } 
                                else if(isset($_POST['superior'])) { 
                                    echo '<select disable class="custom-select custom-select-lg" id="room_type" name="room_type" disabled>';
                                    echo '<option value="Superior">Superior</option>';
                                    echo '<option value="Standart">Standart</option>';
                                    echo '<option value="Luxury">Luxury</option>';
                                    echo '</select>';
                                }
                                else if(isset($_POST['luxury'])) { 
                                    echo '<select class="custom-select custom-select-lg" id="room_type" name="room_type" disabled>';
                                    echo '<option value="Luxury">Luxury</option>';
                                    echo '<option value="Standart">Standart</option>';
                                    echo '<option value="Superior">Superior</option>';
                                    echo '</select>';
                                }
                                else {
                                    echo '<select class="custom-select custom-select-lg" id="room_type" name="room_type">';
                                    echo '<option value="Standart">Standart</option>';
                                    echo '<option value="Superior">Superior</option>';
                                    echo '<option value="Luxury">Luxury</option>';
                                    echo '</select>';
                                }
                                ?>
                            </div>
                            <!-- end of kamar -->
                            <!-- servis -->
                            <div class="form-group">
                                <label for="servis">Add Service(s)</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="servis" name="servis">
                                    <label class="form-check-label" for="exampleCheck1">Room Service</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="servis" name="servis">
                                    <label class="form-check-label" for="exampleCheck1">Breakfast</label>
                                </div>
                            </div>
                            <!-- end of servis -->
                            <!-- telpon -->
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <!-- end of telpon -->
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                        <!-- end of form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of formulir -->
            <!-- room img -->
            <div class="col">
                <!-- <img class="img-fluid" alt="Responsive image" src="assets/img/superior.jpg" style="width:92%;height=auto;"> -->
                <?php
                if(isset($_POST['standart'])) { 
                    echo '<img class="img-fluid" alt="Responsive image" src="assets/img/standart.jpeg" style="width:485px;height=auto;">';
                } 
                else if(isset($_POST['superior'])) { 
                    echo '<img class="img-fluid" alt="Responsive image" src="assets/img/superior.jpg" style="width:485px;height=auto;">';
                }
                else if(isset($_POST['luxury'])) { 
                    echo '<img class="img-fluid" alt="Responsive image" src="assets/img/luxury.jpg" style="width:485px;height=auto;">';
                }
                else {
                    echo '<img class="img-fluid" alt="Responsive image" src="assets/img/standart.jpeg" style="width:485px;height=auto;">';
                }
                ?>
            </div>
            <!-- end of room img -->
        </div>
    </div>
    <!-- end content -->
</body>
</html>