<?php
// koneksi ke db
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul4_jody";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "<script>";
    echo "alert('Failed Connect into Database')";
    echo "</script>";
}
// if ($conn) {
//     echo "<script>";
//     echo "alert('Success Connect into Database')";
//     echo "</script>";
// }
?>