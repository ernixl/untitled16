<?php

include 'connect.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT uid FROM login WHERE uid = '$uid' and pwd ='$pwd' ";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) == 1) {
    header("location: homepage.php");
} else {
    echo "Incorrect username or password. ";
}
?>