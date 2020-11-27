<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul4";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

class database{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $name = "wad_modul4";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
    }

    function register($nama, $email, $no_hp, $password){
        $insert = mysqli_query($this->koneksi,"INSERT INTO user VALUES ('','$nama','$email','$no_hp','$password')");
        return $insert;
    }

    function login($email, $password, $remember){
        $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email='$email'");
        $data_user = $query->fetch_array();
        if (password_verify($password,$data_user['password'])) {
            if ($remember) {
                setcookie('email', $email, time() + (60*60*24*5), '/');
                setcookie('nama', $data_user['nama'], time() + (60*60*24*5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email){
        $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}
?>