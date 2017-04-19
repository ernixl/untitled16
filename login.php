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

?>