<?php
include_once('connect.php');


if (isset($_GET['uid'])) {$sql = "SELECT uid, first, last, FROM login";
    $result = mysqli_query($db, $sql);
    echo "nono";
} else echo "error";
