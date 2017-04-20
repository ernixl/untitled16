<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>

<header>
    <h1>Peer To Peer Evalion</h1>
</header>

<nav>

    <form action="homepage.php" method="post">

        <button type="submit" name="coursework">View Coursework</button>
        <button type="submit" name="feed">Give feedback</button>
        <button type="submit" name="image">Upload file</button>

    </form>


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
    if (isset($_POST['image'])) {
        ?>

        <div>
            <form action="homepage.php" method="post" enctype="multipart/form-data">
                <b>Select file to upload:<br><br>
                    <input type="file" name="image" id="file"><br><br>
                    <button type="submit" name="submit">Upload</button>
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
                    echo "upload successful";
                } else {
                    echo "you cannot upload files of this type due to error";
                }

            } else {
                echo "you cannot upload files of this type";
            }
        }


        $result = mysqli_query($db, $sql);











    }
    ?>
</section>


</body>


</html>