<?php
session_start();
if (!$_SESSION['username']) {
    header('location: index.php');
} else {
    unset($_SESSION['logged_in']);
    unset($_SESSION['username']);

    header('location: index.php');
}