<?php
    include ('confiq.php');

    $name = $_GET['nama'];

    $query = "DELETE FROM event_table WHERE name='$name'";
    $delete = mysqli_query($conn, $query);
?>