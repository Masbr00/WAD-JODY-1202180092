<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>

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
    <div class="container mt-3">
        <h3 class="text-primary" style="text-align: center;">WELCOME TO EAD EVENTS!<h3>
        <?php
            $jumlahdata = mysqli_num_rows($select); ?>
                <?php if ($jumlahdata == 0) { ?>
                    <div class="card ml-3 border-0" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 18px;text-align: center;">No Events Found</p>
                        </div>
                    </div>
                <?php } else { 
                    while ($selects = mysqli_fetch_assoc($select)){?>
                        <div class="card" style="width: 18rem;margin-top: 100px;">
                            <img class="card-img-top" src="assets/img/<?php echo $selects['gambar']?>" alt="Card image cap" style="width:286px;height:286px;">
                            <div class="card-body">
                                <h4 class="card-title mb-4"><?php echo $selects['name']?></h4>
                                <h5>
                                    <i class="fa fa-calendar" style="color:orange"></i>
                                    <spann class="ml-2"><?php echo $selects['tanggal']?></spann>
                                    <br>
                                    <br>
                                    <i class="fa fa-map-marker fa-lg" style="color:orange"></i>
                                    <spann class="ml-2"><?php echo $selects['tempat']?></spann>
                                    <br>
                                    <br>
                                    kategori : Event <?php echo $selects['kategori']?>
                                </h5>
                                <hr>
                                <div align="right">
                                    <form action="detailsEvent.php" method="post">
                                        <button type="submit" class="btn btn-primary px-4" name="submit">Detail</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
    </div>
    <!-- end of content -->
</body>
</html>