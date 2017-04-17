<?php

$username = $_POST['username'];
$password = $_POST['password'];
$admin = "1";

include 'connect.php';

$sql = "SELECT uid FROM login WHERE username='$username' and password='$password'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) == 1 && $row['admin'] != $admin) {
        header("location: homepage.php");
    } elseif (mysqli_num_rows($result) == 1 && $row['admin'] == $admin) {
        header("Location: admin.php");}

        else
        echo "Incorrect username or password. ";


?>


}
?>