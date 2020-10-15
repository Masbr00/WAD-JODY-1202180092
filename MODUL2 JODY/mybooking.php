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
    <div class="container mt-5 mx-auto">
        <div>
            <!-- table -->
            <table class="mx-auto table" style="border-collapse:collapse;text-align:left;">
                <!-- header -->
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
                <!-- end of header -->
                <!-- row -->
                <tr>
                    <!-- random number -->
                    <td><?= rand(100000,999999) ?></td>
                    <!-- end of random number -->

                    <!-- name -->
                    <td>
                        <?php
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            }
                            if (!empty($name)) {
                                echo $name;
                            }else {
                                echo 'No Name';
                            }
                        ?>
                    </td>
                    <!-- end of name -->

                    <!-- cek in -->
                    <td>
                        <?php
                            if (isset($_POST['check-in'])) {
                                $checkin = $_POST['check-in'];
                            }
                            if (!empty($checkin)) {
                                echo date('d/m/Y', strtotime($checkin));
                            }else {
                                echo 'No Date';
                            }
                        ?>
                    </td>
                    <!-- end of cek in -->

                    <!-- cek out -->
                    <td>
                        <?php
                            //hitung lama durasi
                            if (isset($_POST['duration'])) {
                                $duration = $_POST['duration'];
                            }
                            //
                            // menambahkan tanggal
                            $tglskrg = $checkin;
                            $checkout =  date('d/m/Y', strtotime($tglskrg . ' + ' . $duration . 'days'));
                            echo $checkout;
                        ?>
                    </td>
                    <!-- end of cek out -->

                    <!-- tipe kamar -->
                    <td>
                        <?php
                            if (isset($_POST['kamar'])) {
                                $kamar = $_POST['kamar'];
                            }
                            if (!empty($kamar)) {
                                echo $kamar;
                            }else {
                                echo 'No Room';
                            }
                        ?>
                    </td>
                    <!-- end of tipe kamar -->

                    <!-- telpon -->
                    <td>
                        <?php
                            if (isset($_POST['phone'])) {
                                $phone = $_POST['phone'];
                            }
                            if (!empty($phone)) {
                                echo $phone;
                            }else {
                                echo 'No Phone Number';
                            }
                        ?>
                    </td>
                    <!-- end of telpon -->

                    <!-- service -->
                    <td>
                        <?php
                            if (isset($_POST['service'])) {
                                echo '<ul>';
                                $service=$_POST['service'];
                                for ($i==0; $i < count($service); $i++) { 
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
                    <!-- end of service -->

                    <!-- total price -->
                    <td>
                        <?php
                            // hitung banyak servis
                            $totalservice = 0;
                            if (!empty($service)) {
                                for ($i=0; $i < count($service); $i++) {
                                    $totalservice++;
                                }
                            }else {
                                $totalservice = 0;
                            }
                            //
                            // hitung total harga
                            $totalharga = 0;
                            switch ($kamar) {
                                case 'Standard':
                                    $totalharga = (90*$duration)+($totalservice*20);
                                    echo "$ " . $totalharga;
                                    break;

                                case 'Superior':
                                    $totalharga = (150*$duration)+($totalservice*20);
                                    echo "$ " . $totalharga;
                                    break;

                                case 'Luxury':
                                    $totalharga = (200*$duration)+($totalservice*20);
                                    echo "$ " . $totalharga;
                                    break;
                                default:
                                    echo 'No price tag';
                                    break;
                            }
                        ?>
                    </td>
                    <!-- end of total price -->
                </tr>
                <!-- end of row -->
            </table>
            <!-- end of table -->
        </div>
    </div>
    <!-- end of content -->
</body>
</html>