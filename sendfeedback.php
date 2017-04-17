<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">
<h1>You can give feedback here</h1>
<div id="form">
    <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="first" placeholder="Firstname"><br><br>
        <input type="text" name="last" placeholder="Lastname"><br><br>
        <input type="text" name="group" placeholder="Groupname"><br><br>
        <input type="text" name="course" placeholder="Course id"><br><br>
        <input type="file" name="image" placeholder="Upload">
        <input name="feedback" name="feedback" placeholder="write your feedback here" id="" cols="30" rows="10"></input>
        <input type="submit" value="Send" id="submit">


    </form>

    <?php

    $first = $_POST['first'];
    $last = $_POST['last'];
    $group = $_POST['group'];
    $course = $_POST['course'];
    $feedback = $_POST['feedback'];

    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO feedback (first, last, group, course, feedback)
    VALUES ('$first','$last','$group','$course','$feedback')";


    }
    $result = mysqli_query($db, $sql);

    if ($result == true) {
        echo "feedback sent,click <a href=\"homepage.php\">here</a> to return to homepage! ";
    }

    ?>

</div>


</body>


</html>