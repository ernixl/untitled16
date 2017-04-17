<?php

include 'connect.php';
if(empty($_POST[ "uid"]) || empty($_POST[ "pwd"]))
 {
     echo "Both fields are required. ";
 }else
 {
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = " SELECT id FROM login WHERE uid='$uid' and pwd='$pwd' ";

$result = mysqli_query($db,$sql);

if (mysqli_num_rows($result) == 1) {
    header("location: homepage.php");
} else {
    echo "Incorrect username password. ";
}}
?>