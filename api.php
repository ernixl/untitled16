<?php
include_once('connect.php');


if (isset($_GET['uid'])) {$sql = "SELECT uid, first, last, FROM login";
    echo "no";
} else echo "error";
