<!doctype html >
<html>
<meta charset="utf-8">
<head>
    <title>Peer to Peer Evaluation</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body id="body">

<h1>PHP Peer to Peer Evaluation </h1>
<div id="form">

    <h3>Enter your login information or click <a href="register.php">here</a> to register</h3>
    <br>

    <form method="post" action="index.php">

        <input type="text" name="username" placeholder="Username">
        <input type="submit" name="submit" id="submit" value="Login">
        <table>

            <tr>
                <td><b>Username:</b></td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <br><br>

            <tr>
                <td><b>Password:</b></td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="login" class="textInput"></td>
            </tr>

    </form>
    <div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $passwor d; ?></div>
</div>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


include 'connect.php';

$sql = "SELECT admin FROM login WHERE username='$username' and password='$password'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) == 1 && $row['admin'] == 0) {
header("location: homepage.php");
} elseif (mysqli_num_rows($result) == 1 && $row['admin'] == 1) {
header("Location: admin.php");
}

else
echo "Incorrect username or password. ";


?>

</body>

</html>