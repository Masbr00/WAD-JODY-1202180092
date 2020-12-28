<?php
        include ('config.php');

        if(isset($_POST['submit'])){
                $nama2 = $_POST['nama2'];
                $deskripsi = $_POST['deskripsi'];
                $kategori = $_POST['kategori'];
                $tanggal = $_POST['tanggal'];
                $mulai = $_POST['mulai'];
                $berakhir = $_POST['berakhir'];
                $tempat = $_POST['tempat'];
                $harga = $_POST['harga'];
                $benefit = $_POST['benefit'];
                $namaasli = $_POST['namaasli'];

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
                        header("location:index.php?alert=berhasil");
                        }else{
                        header("location:index.php?alert=gagal");
                        }
                }

                $query = "UPDATE event_table SET
                name = '$nama2',
                deskripsi = '$deskripsi',
                gambar = '$xx',
                kategori = '$kategori',
                tanggal = '$tanggal',
                mulai = '$mulai',
                berakhir = '$berakhir',
                tempat = '$tempat',
                harga = '$harga',
                benefit = '$benefit' WHERE name= '$namaasli' ";
                $update = mysqli_query($conn, $query);

                if ($update) {
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