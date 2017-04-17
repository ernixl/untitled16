<?php

$db = mysqli_connect("127.0.0.1:57075", "root", "null", "users");

if(!$db){
    die("Connection failed".mysqli_connect_error());
}
?>