<?php
    include_once ('function/config.php');
    $sql = "DELETE FROM cart WHERE id='" . $_GET['name'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header('location:cart.php');
    }
    else {
        echo "Error";
    }
    mysqli_close($conn);
?>