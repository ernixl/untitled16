<?php
include_once('connect.php');


if (isset($_GET['users'])) {
    $sql = "SELECT uid, first, last, username FROM login";
    $result = mysqli_query($db, $sql);
    If (mysqli_num_rows($result) > 0) echo "over the  entire wall";

} else echo "error";
