<?php 
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "modul4_jody";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    function register($nama, $email, $no_hp, $password){
        $insert = mysqli_query($this->koneksi,"INSERT INTO user VALUES ('','$nama','$email','$no_hp',''$password')");
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