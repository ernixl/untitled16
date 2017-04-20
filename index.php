<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css"/>
</head>
<body>

<header>

    <h1> Peer To Peer Evaluation </h1>

</header>

<div id="indexdiv">

    <h3>Enter your login information</h3>

    <form action="index.php" method="post">

        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button type="submit" id="buttonindex" name="submit">Login</button>
        <br><br>
        <i>Click <a href="register.php">register</a></i> to create an account.

    </form>


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
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $username;
            header("Location: admin.php");
        } else
            echo "<i>Incorrect username or password</i>";
    }

    ?>
</div>
</body>

</html>