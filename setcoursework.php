<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">
<div id="form">
    <form action="setcoursework.php" method="post"></form>
    <input type="text" name="coursename" placeholder="course name"><br><br>
    <input type="text" name="title" placeholder="title"><br><br>
    <textarea name="textarea" id="" cols="30" rows="10" placeholder="descritpion"></textarea><br><br>
    <input type="submit" value="submit" id="submit">

</div>


</body>
<?php

include 'connect.php';

$coursename = $_POST['coursename'];
$title = $_POST['title'];
$description = $_POST['description'];

if (isset($_POST['submit'])){
    $sql = "INSERT INTO setcourse ( coursename, title, description)
    VALUES ('$coursename','$title','$description')";
}

$result = mysqli_query($db, $sql);

if ($result == true){
    header("Location: admin.php");
}

?>
</html>
