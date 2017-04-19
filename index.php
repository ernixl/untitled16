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

    <h3>Enter your login information</h3>

    <form method="post" action="index.php">

        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit" name="register" id="submit" value="Register">Register</button>
        <button type="submit" name="submit" id="submit" value="Login">Login</button>

    </form>

</div>

<?php

if (isset($_POST['register'])){header("Location: register.php");}

?>

</body>

</html>