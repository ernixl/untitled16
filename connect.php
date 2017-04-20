<?php
session_start();

if (isset($_SESSION['username'])){
$db = mysqli_connect("127.0.0.1:57075","root","password","user");
}else{
    echo "Access denied";
}

if(!$db){
    die("Connection failed");
}
?>