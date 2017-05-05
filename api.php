<?php
include_once('connect.php');


if (isset($_GET['uid'])) {
    $sql = "SELECT uid, first, last, FROM login";
    $result = mysqli_query($db, $sql);
    If (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
        echo json_encode($row);}};
    } else echo "error";
