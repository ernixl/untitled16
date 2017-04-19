<?php

include 'connect.php';

$coursename = $_POST['coursename'];
$title = $_POST['title'];
$description = $_POST['description'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO setcourse ( coursename, title, description)
    VALUES ('$coursename','$title', $description)";
}else{
    echo "could not connect to database";
}

$result = mysqli_query($db, $sql);

if ($result == true) {
    header("Location: admin.php");
}

?>