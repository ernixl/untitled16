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
    <form method="post" action="login.php">
        <table>

            <tr>
                <td>username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <br><br>

            <tr>
                <td>password:</td>
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
$DB_SERVER = "127.0.0.1:57075";
$DB_USERNAME = "root";
$DB_PASSWORD = "password";
$DB_DATABASE = "login";

$db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);


if (empty($_POST["username"]) || empty($_POST["password"])) {
echo "Both fields are required";
} else {
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT uid FROM users WHERE username = '$username' and
password ='$password' ";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) == 1) {
header("location: homepage.php"); // Redi recti ng To anot her Page
} else {
echo "Incorrect username or passwords. ";
}

}
?>
</body>

</html>