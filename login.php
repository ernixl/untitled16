<?php
$DB_SERVER = "127.0.0.1:57075";
$DB_USERNAME = "root";
$DB_PASSWORD = "password";
$DB_DATABASE = "login";

$db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);


if (empty($_POST["username"]) || empty($_POST["password"])) {
    header("location: homepage . php"); echo "Incorrect username or password";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT uid FROM users WHERE username = '$username' and
password ='$password' ";

    $result = mysqli_query($db, $sql);

    if ($username == laura and $password == brai) {
        echo "logging in as <b> Admin </b> click <a href='admin.php'>here</a> to continue" ;}

    elseif (mysqli_num_rows($result) == 1) {
        header("location: homepage . php"); // Redi recti ng To anot her Page
    } else {
        echo "Go back and enter a correct username and password . ";
    }

}
?>