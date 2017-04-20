<!DOCTYPE html>
<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" type="text/css" href="styling.css"/>
</head>
<body>

<header>
    <h1>Peer To Peer Evaluation</h1>
</header>

<nav>

    <form action="homepage.php" method="post">

        <button type="submit" id="buttonuser" name="coursework">View Coursework</button>
        <button type="submit" id="buttonuser" name="feed">Give feedback</button>
        <button type="submit" id="buttonuser" name="image">Upload file</button>

    </form>

</nav>

<div>

    <?php
    if (isset($_POST['image'])) {
        ?>

        <?php

        header('Location: upload_front.php');
    }
    ?>

    <?php
    if (isset($_POST['feed'])) {
        ?>


        <form action="homepage.php" method="post">
            <input type="text" name="firstname" placeholder="Firstname"><br><br>
            <input type="text" name="lastname" placeholder="Lastname"><br><br>
            <input type="text" name="groupname" placeholder="Groupname"><br><br>
            <input type="text" name="course" placeholder="Course Code"><br><br>
            <textarea name="feed" placeholder="write your feedback here" cols="30" rows="10"></textarea><br><br>
            <button type="submit" id="buttonindex" name="submit">Submit</button>
        </form>


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
    }
    ?>

    <?php
    if (isset($_POST['coursework'])) {
        include 'connect.php';
        $sql = "SELECT id, coursename, description FROM setcourse";
        $result = mysqli_query($db, $sql);
    }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>COURSENAME</th>
            <th>DESCRIPTION</th>
        </tr>

        <?php
        $result = mysqli_query($db, $sql);
        If (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['coursename']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                </tr>
                <?php
            }
        }
        ?>

    </table>

</div>
</body>


</html>