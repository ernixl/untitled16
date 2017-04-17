<?php

include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password22 = $_POST['password2'];

if (empty($password) || empty($password2)) {
    echo "<br><b><i>enter password field</b></i><br>";
}

if ($pwd != $pwd2) {
    echo "<b><i>password mismatch</b></i>";
} else {
    $sql = "INSERT INTO login (first, last, email, username, password)
    VALUES ('$first','$last','$email','$username','$password')";
}

$result = mysqli_query($db, $sql);

if ($result == true){
    header("Location: index.php");
}
