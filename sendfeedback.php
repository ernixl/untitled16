<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">

<h1>You can give feedback here</h1>

<div id="form">
    <form action="feedback.php" method="post">
        <input type="text" name="firstname" placeholder="Firstname"><br><br>
        <input type="text" name="lastname" placeholder="Lastname"><br><br>
        <input type="text" name="groupname" placeholder="Groupname"><br><br>
        <input type="text" name="course" placeholder="Course Code"><br><br>
        <textarea name="feed" placeholder="write your feedback here" id="" cols="30" rows="10"></textarea>
        <button type="submit" id="submit">Submit</button>

    </form>

</div>

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




</body>


</html>