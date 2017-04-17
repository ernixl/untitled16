<?php

include 'connect.php';

if (empty($_POST["uid"]) || empty($_POST["pwd"])) {
    echo "username and password required";
} else {
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT uid FROM login WHERE uid = '$uid' and
pwd ='$pwd' ";

    $result = mysqli_query($db, $sql);

    if ($result == true) {
        session_start();
        $_SESSION["uid"] = $uid;
        $_SESSION["pwd"] = $pwd;

        $row = mysqli_fetch_array($result);
        if ($row['admin'] == 0) {
            header("location: homepge.php");
        } elseif ($row['admin'] == 1) {
            header("location:admin.php");
        }
    } else
        echo "invalid password and username";

}
?>