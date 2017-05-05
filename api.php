<?php
include('connect.php');


if (isset($_GET['users'])) {
    $sql = "SELECT uid, first, last, username FROM login";
    $result = mysqli_query($db, $sql);
    If (mysqli_num_rows($result) > 0);
    header('Content-type: text/javascript');
    echo json_encode($result);

} else echo "error";
