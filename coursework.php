<?php

include 'connect.php';

$coursename = $_POST['coursename'];
$title = $_POST['title'];
$description = $_POST['description'];

if (empty($coursename) || empty($title)) {
    echo "input all data";
} else {
    $sql = "INSERT INTO setcourse ( coursename, title, description)
    VALUES ('$coursename','$title', $description)";
}

$result = mysqli_query($db, $sql);

if ($result == true) {
    header("Location: admin.php");
} else echo "failed";

?>


