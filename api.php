<?php
include_once('connect.php');


if (isset($_GET['uid'])) {
    $sql = "SELECT uid, first, last, FROM login";
    $result = mysqli_query($db, $sql);
    If (mysqli_num_rows($result) <= 0) echo "over the wall";

} else echo "error";
