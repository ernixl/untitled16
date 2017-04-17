<?php

include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

if (empty($pwd) || empty($pwd2)) {
    echo "<br>enter password field<br>";
}

if ($pwd != $pwd2) {
    echo "password mismatch";
} else {
    $sql = "INSERT INTO login (first, last, email, uid, pwd)
    VALUES ('$first','$last','$email','$uid','$pwd')";
}

$result = mysqli_query($db, $sql);


