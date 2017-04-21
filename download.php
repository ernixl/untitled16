<?php
session_start();

include('connect.php');

if (isset($_POST['dow'])) {
    $image = $_GET['image'];

    $sql = "SELECT * FROM image WHERE image='$image'";

    $result = mysqli_query($db, $sql);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($image) . '""');
    readfile($image);

}
?>