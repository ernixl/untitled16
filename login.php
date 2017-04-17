<?php

include 'connect.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = " SELECT * FROM login WHERE uid='$uid' and pwd='$pwd' ";

$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result);

     if (mysql_num_rows($result)==1) {
         header("Location: homepage.php");
     }else echo "invalid password and username";

?>