<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Details Event</title>

    <!-- koneksi database -->
    <?php
        include ('config.php');
        $query = "SELECT * FROM event_table";
        $select = mysqli_query($conn, $query);
    ?>
    <!-- end of koneksi database -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <form action="buatevent.php">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buat Event</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- content -->
    <div class="contaier mt-3">
        <h5 class="text-primary mb-4" style="text-align: center">Detail Event!</h5>
        <?php while ($selects = mysqli_fetch_assoc($select)){ ?>
            <div class="card mx-auto" style="width: 50%;">
                <img class="card-img-top" src="assets/img/<?php echo $selects['gambar'] ?>" alt="Card image cap" style="width:full;height:350px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $selects['name'] ?></h5>
                    <p class="card-text">
                    <b>Deskripsi</b>
                    <br>
                    <?php echo $selects['deskripsi'] ?>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <b>Informasi Event</b>
                            <br>
                            <i class="fa fa-calendar" style="color:orange"></i>
                            <spann class="ml-2"><?php echo $selects['tanggal']?></spann>
                            <br>
                            <br>
                            <i class="fa fa-map-marker fa-lg" style="color:orange"></i>
                            <spann class="ml-2"><?php echo $selects['tempat']?></spann>
                            <br>
                            <br>
                            <i class="far fa-clock" style="color:orange;font-size:15px"></i>
                            <spann class="ml-2"><?php echo $selects['mulai'],' - ',$selects['berakhir']?></spann>
                        </div>
                        <div class="col-sm">
                            <b>Benefit</b>
                            <ul>
                                <?php
                                $benefit = explode(",", $selects['benefit']);
                                    for ($i=0; $i < count($benefit); $i++) { 
                                        echo '<li>';
                                        echo $benefit[$i];
                                        echo '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <?php 
                        echo '<b>Kategori</b> : ',' ',$selects['kategori'];
                        echo '<br>';
                        echo '<b>HTM Rp</b> ',' ',$selects['harga'];
                    ?>
                    </p>
                    <div align="center">
                        <div class="form-check-inline">
                            <button type="button" class="btn btn-primary btn-md mr-3 px-5" data-toggle="modal" data-target="#exampleModal">Edit</button>
                            <a href="delete.php?name=<?php echo $selects['name']; ?>" class="btn btn-danger btn-md px-5">Delete</a>
                        <div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <!-- end of content -->
</body>
</html>