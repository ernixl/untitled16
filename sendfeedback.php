<html>
<head>
    <title>set course work</title>
</head>
<body>
<div>
    <header>
        <h1>Peer To Peer Evaluation</h1>
        <h2>Give feedbacck</h2>
    </header>
    <nav>
        <div>
            <ul>

                <li><a href="viewcoursework.php">View Coursework</a></li>
                <li><a href="sendfeedback.php">Give Feedback</a></li>
                <li><a href="upload_front.php">Upload File</a></li>

    </nav>


    <article>
        <div>
            <form action="sendfeedback.php" method="post">
                <input type="text" name="firstname" placeholder="Firstname"><br><br>
                <input type="text" name="lastname" placeholder="Lastname"><br><br>
                <input type="text" name="groupname" placeholder="Groupname"><br><br>
                <input type="text" name="course" placeholder="Course Code"><br><br>
                <textarea name="feed" placeholder="write your feedback here"  cols="30" rows="10"></textarea>
                <button type="submit" name="submit">Submit</button>

            </form>
    </article>

    <?php

    if (isset($_POST['submit'])) {

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
            echo "<b>feedback sent successfully, click <a href=\"homepage.php\">here</a> to return to homepage</b>";
        } else echo "some error occured";
    }
    ?>
</div>


</body>


</html>