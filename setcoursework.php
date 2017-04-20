<html>
<head>
    <title>set course work</title>
</head>
<body>
<div>
    <form action="setcoursework.php" method="post">
        <input type="text" name="coursename" placeholder="course name"><br><br>
        <input type="text" name="title" placeholder="title"><br><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>

</div>

<?php
if (isset($_POST['submit'])) { ?>
<div>
    <form action="setcoursework.php" method="post">
        <input type="text" name="coursename" placeholder="course name"><br><br>
        <input type="text" name="title" placeholder="title"><br><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>

</div>

<?php
if (isset($_POST['submit'])) {
    include 'connect.php';

    $coursename = $_POST['coursename'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (empty($coursename) || empty($title)) {
        echo "<p><b><i>error 1: input all data</i></b></p>";
    } else {
        $sql = "INSERT INTO setcourse( coursename, title, description)
    VALUES ('$coursename','$title', '$description')";
    }


    $result = mysqli_query($db, $sql);

    if ($result == true) {
        header("Location: admin.php");
    } else echo "<p><b><i>error 2: failed</i></b></p>";
}}
?>
}


</body>

</html>
