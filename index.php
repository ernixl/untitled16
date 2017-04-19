<!doctype html >
<html>
<meta charset="utf-8">
<head>

    <title> Welcome to the Peer to Peer Evaluation web app</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>

</head>

<body id="body">


What do you want to

<form action="index.php" method="post">

    <button type="submit" name="login" id="submit">login</button>
    <button type="reset" name="register" id="submit">register</button>

</form>


<?php

if (isset($_POST['login' or 'register'])){
    echo "yes";
}



?>
</body>

</html>