<?php

$db = mysqli_connect("127.0.0.1:57075","root","password","user");

if(!$db){
    die("Connection failed".mysqli_connect_error());
}
?>