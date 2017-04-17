<?php

include 'connect.php';

$sql = "SELECT uid FROM login WHERE uid = '$uid' and
pwd ='$pwd' ";

$result = mysqli_query($db, $sql);

if ($result['admin']== 1){
    header ("Location: admin.php");}
    elseif ($result['admin'] == 0){
    header ("Location: homepage.php");
}


 else
    echo "invalid password and username";
?>