<?php
session_start();

$db = mysqli_connect("127.0.0.1:57075","root","password","user");

if(!$db){
    die("Connection failed");
}
?>