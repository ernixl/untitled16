<?php
include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$gname = $_POST['gname'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];



if (empty($feedback) || empty($course)) {echo "input all data";}
else{
    $sql = "INSERT INTO login (first, last, gname, course, feedback)
VALUES ( '$first', '$last', '$gname', '$course', '$feedback')"; echo "feedback sent";
}

$result = mysqli_query($db, $sql);

if ($result == true){
    header("Location: index.php");
}else echo "some error occured";



?>