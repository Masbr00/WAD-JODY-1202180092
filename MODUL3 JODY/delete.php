<?php
    include ('config.php');
    $sql = "DELETE FROM event_table WHERE name='" . $_GET['name'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:home.html");
    }
    else {
        echo "Error";
    }
    mysqli_close($conn);
?>