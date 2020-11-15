<?php
include ('config.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = implode(",", $_POST['benefit']);

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/'.$rand.'_'.$filename);
            mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$nama','$kontak','$alamat','$xx')");
            header("location:index.php?alert=berhasil");
        }else{
            header("location:index.php?alert=gagal");
        }
    }

    $query = "INSERT into event_table(name,deskripsi,gambar,kategori,tanggal,mulai,berakhir,tempat,harga,benefit) 
            values ('$nama', '$deskripsi', '$xx', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
    $insert = mysqli_query($conn, $query);
    if ($insert) {
        header("location:home.php");
    }
    if ($query) {
        header("location:home.php");
    }
}
if (isset($_POST['cancel'])) {
    header("location:home.php");
}
?>