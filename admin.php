<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>

<body>
<a href="index.php">Logoutkkk</a>

<header>
    <h1>Peer to Peer Ev</h1>
</header>

<body>

<nav>

    <form action="admin.php" method="post">

        <button type="submit" name="description">Set Coursework</button>
        <button type="submit" name="view">View feedback</button>
        <button type="submit" name="files">View files</button>

    </form>


</nav>
<div>
    <?php

    if (isset($_POST['description'])) {
        ?>

        <form action="admin.php" method="post">
            <input type="text" name="coursename" placeholder="course name"><br><br>
            <input type="text" name="title" placeholder="title"><br><br>
            <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea><br><br>
            <button type="submit" name="submit" value="submit">submit</button>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            include 'connect.php';

            $coursename = $_POST['coursename'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (empty($coursename) || empty($title)) {
                echo "<i>error 1: input all data</i><br>";
            } else {
                $sql = "INSERT INTO setcourse( coursename, title, description)
    VALUES ('$coursename','$title', '$description')";
            }

            $result = mysqli_query($db, $sql);

            if ($result == true) {
                header("Location: admin.php");
            } else echo "<i>error 2: failed</i>";
        }
    }
    ?>

    <?php
    if (isset($_POST['view'])) {

        include 'connect.php';

        $sql = "SELECT uid, firstname, lastname, groupname, course, feed FROM feedback";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<br> " . $row["uid"] . " " . " <b><i> Name: </i></b> " . " " . $row["firstname"] . " " . "<b><i> LastName: </i></b> " . " " . $row["lastname"] . " " . "<b><i> Group: </i></b>" . " " . $row["groupname"] . " " . "<b><i> Course: </i></b>" . " " . $row["course"] . " " . "<b><i> Feedback: </i></b>" . " " . $row["feed"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    }
    ?>


    <?php
    if (isset($_POST['files'])) {
        include 'connect.php';

        $sql = "SELECT id, name, image FROM image";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {

                $id = $row["id"];
                $name = $row["name"];
                $path = $row["image"];

                echo $id . " " . $name . " <a href='download.php?dow=$path'>Download</a> " . " " . " <br><br> ";
            }
        } else {
            echo "no results found";
        }
    }
    ?>


</div>


</body>
</html>