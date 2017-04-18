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
        <input type="text" name="gname" placeholder="Groupname"><br><br>
        <input type="text" name="course" placeholder="Course Code"><br><br>
        <textarea name="feedback" placeholder="write your feedback here" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Send" id="submit">

    </form>

    <?php

    $first = $_POST['first'];
    $last = $_POST['last'];
    $gname = $_POST['gname'];
    $course = $_POST['course'];
    $feedback = $_POST['feedback'];


    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO feedback (first, last, gname, course, feedback)
    VALUES ('$first','$last','$gname','$course','$feedback')"; echo "feedback sent";
    }else echo "error sending feedback";
    $result = mysqli_query($db, $sql);

    if ($result == true) {
        echo "feedback sent,click <a href=\"homepage.php\">here</a> to return to homepage! ";
    }

    ?>

</div>


</body>


</html>