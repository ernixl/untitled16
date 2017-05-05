<?php
include_once('connect.php');

$uid = isset($_GET['uid']) ? mysqli_real_escape_string($_GET['uid']) :  "";
if(!empty($uid)){
    $sql = mysqli_query("SELECT first, last, email, admin FROM login where uid='$uid'");
    $result =array();
    while($r = mysqli_fetch_array($sql)){
        extract($r);
        $result[] = array('first' => $first, 'last' => $last, 'email' => $email, 'admin' => $status);
    }
    $json = array('admin' => 1, 'info' => $result);
}else{
    $json = array('admin' => 0, 'msg' => "User ID not define");
}



header('Content-type: application/json');
echo json_encode($json);


