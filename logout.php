<?php
session_start();
if (isset($_SESSION['username'])){

} else{
    header('Location: index.php');}


unset($_SESSION['logged_in']);
unset($_SESSION['username']);

header('location: index.php');