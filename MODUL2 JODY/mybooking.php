<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>My Booking</title>
</head>
<body class="bg-white">
    <?php
        $nama = $_POST['name'];
        $cekin = $_POST['check-in'];
        $durasi = $_POST['duration'];
        $tipekamar = $_POST['room_type'];
        $telpon = $_POST['phone'];
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->
    <!-- content -->
    <div class="container mt-2 mx-auto">
        <div>
            <table class="mx-auto table" style="border-collapse:collapse;text-align:left;">
                <tr class="bg-light" style="border-bottom: 1px">
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Room Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
                </tr>
                <tr>
                    <td><?= rand(100000,999999) ?></td>
                    <td><?= $nama ?></td>
                    <td><?= date('d-m-Y', strtotime($cekin)) ?></td>
                    <td><?= date($cekin) ?></td>
                    <td><?= $tipekamar ?></td>
                    <td><?= $telpon ?></td>
                    <td>
                        <?php
                            if (isset($_POST['service'])) {
                                echo '<ul>';
                                $service=$_POST['service'];
                                for ($i=0; $i < count($service); $i++) { 
                                    echo '<li>';
                                    echo $service[$i]."<br>";
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }else {
                                echo 'No Service';
                            }
                        ?>
                    </td>
                    <td>
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>