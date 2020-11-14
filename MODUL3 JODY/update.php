<?php
    include ('config.php');
    
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $tanggal = $_POST['tanggal'];
        $mulai = $_POST['mulai'];
        $berakhir = $_POST['berakhir'];
        $tempat = $_POST['tempat'];
        $harga = $_POST['harga'];
        $benefit = $_POST['benefit'];

        $query = "UPDATE event_table SET
                name = '$nama',
                deskripsi = '$deskripsi',
                gambar = '$gambar',
                kategori = '$kategori',
                tanggal = '$tanggal',
                mulai = '$mulai',
                berakhir = '$berakhir',
                tempat = '$tempat',
                harga = '$harga',
                benefit = '$benefit'";
        $update = mysqli_query($conn, $query);
?>