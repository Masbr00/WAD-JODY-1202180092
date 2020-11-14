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

    $query = "INSERT into event_table(name,deskripsi,gambar,kategori,tanggal,mulai,berakhir,tempat,harga,benefit) 
            values ('$nama', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
    $insert = mysqli_query($conn, $query);
}
?>