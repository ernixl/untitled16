<?php

include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

if ($pwd==$pwd2){
$sql = "INSERT INTO login (first, last, email, uid, pwd)
VALUES ('$first','$last','$email','$uid','$pwd')";}
else echo "passwords dont match";

$result = mysqli_query($db,$sql);

header ("Location: index.php");