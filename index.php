<!doctype html >
<html>
<meta charset="utf-8">
<head>

    <title>Peer to Peer Evaluation</title>
    <link rel="stylesheet" href="stylebasic.css" type="text/css"/>

</head>

<body id="body">

<h1>PHP Peer to Peer Evaluation </h1>

<div id="form">

    <h3>Enter your login information </h3>

    <form action="index.php" method="post">

        Username: <input type="text" name="username" placeholder="Username"><br><br>
        Password: <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit" name="submit" id="submit" value="Login">Login</button>
        <button type="submit" name="register" id="submit">Register</button>

    </form>

    <a href="bootstrap.php">trial</a>


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
        } else
            echo "<i>error: Incorrect username or password</i>";
    }

    if (isset($_POST['register'])) {
        header('Location: register.php');
    }

    ?>


</div>


</body>

</html>