<?php

include 'connect.php';

$sql = "SELECT uid FROM login WHERE uid = '$uid' and
pwd ='$pwd' ";

$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);

if ($result == true and $row['admin'] == [1]) {
        header("location: admin.php");
    }
    elseif ($result == true and $row['admin'] == [0]) {
        header("location: homepage.php");

} else
    echo "invalid password and username";
?>