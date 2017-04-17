<?php

include 'connect.php';
if(empty($_POST[ "uid"]) || empty($_POST[ "pwd"]))
 {
     echo "Both fields are required. ";
 }else
 {
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = " SELECT * FROM login WHERE uid='$uid' and pwd='$pwd' ";

$result = mysqli_query($db,$sql);

     if (mysql_num_rows($result)==1) {
         $row = mysqli_fetch_array($result);
         if ($row['admin'] == 0) {
             echo "admin user";
         } elseif ($row['admin'] == 1) {
             echo "normal user";
         } else
             echo "invalid password and username";
     }}

?>