<?php
include('connect.php');


if (isset($_GET['allusers'])) {
    $sql = "SELECT uid, first, last,email, username FROM login";
    $qur = mysqli_query($db, $sql);
    If (mysqli_num_rows($qur) > 0) ;

    $result = array();
    while ($r = mysqli_fetch_array($qur)) {
        extract($r);
        $result[] = array(first => $first, last => $last, email => $email, username => $username);
    }

    header('Content-type: application/json');
    echo json_encode($result);


}elseif (isset($_GET['allfeedback'])){
    $sql = "SELECT firstname, feed FROM feedback";
    $qur = mysqli_query($db, $sql);
    If (mysqli_num_rows($qur) > 0) ;

    $result = array();
    while ($r = mysqli_fetch_array($qur)) {
        extract($r);
        $result[] = array(firstname => $firstname, feed => $feed);
    }

    header('Content-type: application/json');
    echo json_encode($result);'\n'; '<br>';

}
else echo "invalid ";
