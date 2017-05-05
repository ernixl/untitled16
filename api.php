<?php
include('connect.php');


if (isset($_GET['allusers'])) {
    $sql = "SELECT uid, first, last,email, username FROM login";
    $qur = mysqli_query($db, $sql);
    If (mysqli_num_rows($qur) > 0) ;

    $result = array();
    while ($r = mysqli_fetch_array($qur)) {
        extract($r);
        $result[] = array(first => $firstname, last => $lastname, email => $email, username => $username);
    }

    header('Content-type: application/json');
    echo json_encode($result);


} else echo "invalid hod";
