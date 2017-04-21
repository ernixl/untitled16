<?php
session_start();



if (isset($_POST['dow'])) {include('connect.php');
    $path = $_GET['dow'];

    $sql = "SELECT * FROM image WHERE image='$path'";

    $result = mysqli_query($db, $sql);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($path));
    readfile($path);

}
?>