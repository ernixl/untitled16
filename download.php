<?php
session_start();

include('connect.php');

if (isset($_POST['dow'])) {
    $path = $_GET['dow'];

    $sql = "SELECT * FROM image WHERE image='$path'";

    $result = mysqli_query($db, $sql);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($path).'""');
    readfile($path);

}
?>