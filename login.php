<?php

include 'connect.php';

$sql = "SELECT uid FROM user WHERE uid = '$uid' and
pwd ='$pwd' ";

$result = mysqli_query($db,$sql);

if( mysqli_num_rows($result) == 1){
     header("location: homepage.php");
 }
 else
 {
     echo "Incorrect username or password. ";
 }
?>

