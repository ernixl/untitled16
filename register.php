<?php
session_start();

$DB_SERVER = "127.0.0.1:57075";
$DB_USERNAME = "root";
$DB_PASSWORD = "password";
$DB_DATABASE = "login";

$db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

if (isset($_POST['register'])) {
    session_start();

    $name = mysqli_real_escape_string($_POST['name']);

    $surname = mysqli_real_escape_string($_POST['surname']);

    $email = mysqli_real_escape_string($_POST['email']);

    $username = mysqli_real_escape_string($_POST['username']);

    $password = mysqli_real_escape_string($_POST['password']);

    $password2 = mysqli_real_escape_string($_POST['password2']);

    if ($password == $password2) {
        $password = md5($password);
        $sql = "INSERT INTO login(name, surname,username, email, password) VALUES('$name', '$surname', '$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header('location: homepage.php');
    } else {
        $_SESSION['message'] = "The two passwords do not match";
    }


}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">
<h1>Register to log</h1>

<div id="form">
    <h3>Register to login</h3>

    <form action="signup.php" method="post">
        <input type="text" name="first" placeholder="Firstname"><br><br>
        <input type="text" name="last" placeholder="Lastname"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="text" name="uid" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <input type="password" name="pwd2" placeholder="Repeat Password"><br><br>
        <button type="submit" id="submit">SignUp</button>
    </form>
</div>


</body>


</html>