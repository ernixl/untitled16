<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">
<div id="form">
    <form action="setcoursework.php" method="post">
        <input type="text" name="coursename" placeholder="course name"><br><br>
        <input type="text" name="title" placeholder="title"><br><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="submit" id="submit">
    </form>

</div>

<?php

include 'connect.php';

$coursename = $_POST['coursename'];
$title = $_POST['title'];
$description = $_POST['description'];

if (empty($coursename) || empty($title)) {
    echo "input all data";
} else {
    $sql = "INSERT INTO setcourse( coursename, title, description)
    VALUES ('$coursename','$title', '$description')";
}

$result = mysqli_query($db, $sql);

if ($result == true) {
    header("Location: admin.php");
} else echo "failed";

?>

</body>

</html>
