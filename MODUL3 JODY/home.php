<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
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
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buat Event</button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- content -->
    <div class="container mt-3">
        <h3 class="text-primary" style="text-align: center;">WELCOME TO EAD EVENTS!<h3>
        <?php while ($selects = mysqli_fetch_assoc($select)) { 
            $id     = $selects['id'];
            $name   = $selects['name'];
            $desc   = $selects['deskripsi'];
            $pict   = $selects['gambar'];
            $catg   = $selects['kategori'];
            $date   = $selects['tanggal'];
            $start  = $selects['mulai'];
            $end    = $selects['berakhir'];
            $place  = $selects['tempat'];
            $prc    = $selects['price'];
            $benft  = $selects['benefit'];
            ?>
            
        <?php } ?>
        
    </div>
    <!-- end of content -->
</body>
</html>