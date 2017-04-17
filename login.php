<?php

$username=$_POST['username'];
$password=$_POST['password'];

include 'connect.php';

$sql ="SELECT uid FROM login WHERE username='$username' and password='$password'";

    $result =mysqli_query($db,$sql);





$row = mysqli_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
header("Location: homepage.php");

} else {
echo "login failed";
}
?>