<?php
include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$gname = $_POST['gname'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];



if (empty($feedback) || empty($course)) {echo "inou all data";}
else{
    $sql = "INSERT INTO feedback (first, last, gname, course, feedback)
VALUES ('$first','$last','$gname','$course','$feedback')"; echo "feedback sent";
}

$result = mysqli_query($db, $sql);

if ($result == true) {
    echo "feedback sent,click <a href=\"homepage.php\">here</a> to return to homepage! ";
} else echo "i cannot";

?>