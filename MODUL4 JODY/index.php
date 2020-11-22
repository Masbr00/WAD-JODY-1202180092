<?php
include ('function/config.php');
$database = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// get userid
$current = $_SESSION['email'];
$sql = "SELECT id FROM user WHERE email = '$current'";
$user_id = mysqli_query($conn,$sql);
$id_user=0;
while ($user_ids = mysqli_fetch_assoc($user_id)) {
    $id_user = $user_ids['id'];
}

// menambahkan barang item1
if(isset($_POST['item1'])){
    // tambah barang
    $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'Yuja Niacin', '169000')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
    }
}
// menambahkan barang item2
if(isset($_POST['item2'])){
    // tambah barang
    $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'Snail Truecica', '180000')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
    }
}
// menambahkan barang item3
if(isset($_POST['item3'])){
    // tambah barang
    $sql = "INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user', 'Miracle Toner', '108000')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
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
                            Selamat Datang, <font class="text-primary"><?php echo $_SESSION['nama']?></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->
    <?php
        if(isset($_SESSION['is_login'])){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo '<strong>HALOOO</strong> Selamat Datang di halaman web kami';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        }
    ?>
    <!-- content -->
    <div class="container my-5">
        <div class="card mx-auto border-0" style="width:65%">
            <div class="border rounded" style="background-image: linear-gradient( 89.8deg, rgba(48,180,164,1) 0.2%, rgba(118,255,238,1) 20%, rgba(192,255,247,1) 41.3%, rgba(246,224,96,1) 70.1%, rgba(223,173,54,1) 100% );">
                <br>
                <h1 class="mt-3" align="center">WAD Beauty</h1>
                <p class="mb-3"align="center">Tersedia Skincare dengan harga murah tapi bukan murahan dan berkualitas</p>
                <br>
            </div>
            <form method="post" action="">
                <div class="card-body pt-0 px-3">
                    <div class="row border rounded">
                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="assets/img/yuja.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                                <p class="card-text">Produk terbaru dari Somebymi yang memiliki manfaat untuk Whitening + blemish care + Ant-wrinkle, 
                                sangat recomended untuk masalah kulit kusam, kulit kering dan bekas jerawat atau FLEK hitam</p>
                                <hr>
                                <p><b>Rp169.000</b></p>
                            </div>
                        </div>
                        <div class="col card border-top-0 border-bottom-0 px-0">
                            <img class="card-img-top" src="assets/img/somebymi.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                                <p class="card-text">Sebagai pelembab, krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit, 
                                sehingga terasa halus, lembab dan kenyal. Mencerahkan, menghambay penuan seperti keriput dan garis halus, juga 
                                menenangkan kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecia</p>
                                <hr>
                                <p><b>Rp180.000</b></p>
                            </div>
                        </div>
                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="assets/img/toner.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                                <p class="card-text">Dengan kandungan AHA, BHA dan PHA bekerja secara efektif untuk membuat kulit lebih bersih dan lebih 
                                bersinar, mengandung 10.000 ppm ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas dan menutrisi kulit 
                                Anda tanpa efek iritasi karena tidak mengandung 20 bahan 500 dan pewarna berbahaya</p>
                                <hr>
                                <p><b>Rp108.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row border rounded" align="center">
                        <div class="col card border-0">
                            <button type="submit" name="item1" class="btn btn-primary btn-sm my-3" style="width:100%">Tambahkan ke Keranjang</button>
                        </div>
                        <div class="col card border-top-0 border-bottom-0">
                            <button type="submit" name="item2" class="btn btn-primary btn-sm my-3" style="width:100%">Tambahkan ke Keranjang</button>
                        </div>
                        <div class="col card border-0">
                            <button type="submit" name="item3" class="btn btn-primary btn-sm my-3" style="width:100%">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end of content -->
</body>
</html>