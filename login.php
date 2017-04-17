<?php

include 'connect.php';

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
?>