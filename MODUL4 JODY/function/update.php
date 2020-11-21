<?php
    include_once('config.php');
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        
        if ($_POST['confirm_password'] == $_POST['password']){
            try {
                $sql = "UPDATE user SET nama='$nama', email='$email', no_hp='$no_hp', password='$password' WHERE email='$email'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                header('location: ../profile.php');
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
        else{
            echo "Gagal di-Update";
        }
    }
    else{
        if(isset($_POST['cancel'])){
            header('location: index.php');
        }
    }
?>