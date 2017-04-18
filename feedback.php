<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$groupname = $_POST['groupname'];
$course = $_POST['course'];
$feed = $_POST['feed'];


if (empty($feed) || empty($course)) {
    echo "input all data";
} else {
    $sql = "INSERT INTO feedback (firstname, lastname, groupname, course, feed)
VALUES ('$firstname','$lastname','$groupname','$course','$feed')";
}

$result = mysqli_query($db, $sql);

if ($result == true) {
    echo " feedback sent successfully, click <a href=\"homepage.php\">here</a> to return to homepage";
} else echo "some error occured";
?>


