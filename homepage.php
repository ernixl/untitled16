<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>

<header>
    <h1>Peer To Peer Evaluations</h1>
</header>

<nav>

    <form action="homepage.php" method="post">

        <button type="submit" name="coursework">View Coursework</button>
        <button type="submit" name="feed">Give feedback</button>
        <button type="submit" name="upload">Upload file</button>

    </form>

    <a href="upload_front.php">Upload File</a></li>


</nav>

<section>
    <?php
    if (isset($_POST['coursework'])) {
        include 'connect.php';
        $sql = "SELECT coursename, description FROM setcourse";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<b><i> Coursename: </i></b>" . " " . $row["coursename"] . " " . "<b><i> description: </i></b>" . " " . $row["description"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    }
    ?>

    <?php
    if (isset($_POST['feed'])) {
        ?>
        <article>

            <form action="homepage.php" method="post">
                <input type="text" name="firstname" placeholder="Firstname"><br><br>
                <input type="text" name="lastname" placeholder="Lastname"><br><br>
                <input type="text" name="groupname" placeholder="Groupname"><br><br>
                <input type="text" name="course" placeholder="Course Code"><br><br>
                <textarea name="feed" placeholder="write your feedback here" cols="30" rows="10"></textarea><br><br>
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
    }
    ?>

    <?php
    if (isset($_POST['upload'])) {
        ?>
        <div>
            <form action="homepage.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="file" id="image"><br><br>
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            require("connect.php");
            $file = $_FILES['file'];

            $filename = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $filename);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $sql = "INSERT INTO image (name, image) VALUES ('$fileNameNew', '$fileTmpName')";
                    header("Location: homepage.php?uploadsuccess");
                } else {
                    echo "you cannot upload files of this type due to error";
                }

            } else {
                echo "you cannot upload files of this type";
            }
        }


        $result = mysqli_query($db, $sql);

        if ($result == true) {
            header("Location: index.php");
        }
    }

    ?>


</section>


</body>


</html>