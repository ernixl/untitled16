<?php

include 'db_connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

$sql = "INSERT INTO users ('first','last','email','uid','pwd')
VALUES ('$first','$last','$email','$uid','$pwd')";

$result = $db->query($sql);

echo "thank you for signing up";