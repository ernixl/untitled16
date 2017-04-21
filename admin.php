<?php
session_start();
if (!$_SESSION['username']) {
    header('location: index.php');
} else {
    echo "You are logged in as " . $_SESSION['username'];
}
?>
( <i><a href="logout.php">logout</a></i> )

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="styling.css"/>
</head>

<body>

<header>
    <h1>Peer to Peer Evaluation</h1>
</header>

<body>

<nav>

    <form action="admin.php" method="post">

        <button type="submit" id="buttonuser" name="description">Set Coursework</button>
        <button type="submit" id="buttonuser" name="view">View feedback</button>
        <button type="submit" id="buttonuser" name="files">View files</button>
        <button type="submit" id="buttonuser" name="files">View files</button>
        <button type="submit" id="buttonuser" name="files">View files</button>

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
            <button type="submit" id="buttonindex" name="submit" value="submit">submit</button>
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

    $sql = "SELECT uid, firstname, lastname, course, feed FROM feedback";
    $result = mysqli_query($db, $sql);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>COURSE</th>
            <th>FEEDBACK</th>
        </tr>

        <?php
        $result = mysqli_query($db, $sql);
        If (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['uid']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td><?php echo $row['feed']; ?></td>
                </tr>
                <?php
            }
        }
        }
        ?>
    </table>


    <?php
    if (isset($_POST['files'])) {
    include 'connect.php';

    $sql = "SELECT id, name, image FROM image";
    $result = mysqli_query($db, $sql);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>FILENAME</th>
            <th>DOWNLOAD LINK</th>
        </tr>

        <?php

        $result = mysqli_query($db, $sql);
        If (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $path = $row["image"];
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo " <a href='download.php?dow=$path'>Download</a> "; ?></td>
                </tr>
                <?php
            }
        }
        }
        ?>
    </table>


</div>


</body>
</html>