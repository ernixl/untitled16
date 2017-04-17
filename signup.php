<?php

include 'db_connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

echo $first . "<br>";
echo $last . "<br>";
echo $email . "<br>";
echo $uid . "<br>";
echo $pwd . "<br>";