<?php


include 'connect.php';


$username = $_POST['username'];
$password = $_POST['password'];


$result = mysqli_query("SELECT id FROM login WHERE username='$username' and password='$password'")

or die("failed to query database" . mysqli_error());

$row = mysqli_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
    header("Location: homepage.php");

} else {
    echo "login failed";
}
?>