<?php
include_once('connect.php');


if (isset($_GET['uid'])) {$sql = "SELECT uid, first, last, FROM login";
    $result = mysqli_query($db, $sql);
    $results = array();
    while ($info = mysqli_fetch_array($result)){
        $results[] = $info;
    }
    $results = json_encode($results);
    echo 'uid' . $results;
} else echo "error";
