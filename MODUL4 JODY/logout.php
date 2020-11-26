<?php
session_start();
session_unset();
session_destroys();
setcookie('email', '', 0, '/');
setcookie('nama', '', 0, '/');
header('location:login.php')
?>