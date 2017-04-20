<!DOCTYPE html>
<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css"/>
</head>
<body>
<h1>File Upload</h1>
<div>

    <form action="upload_front.php" method="post" enctype="multipart/form-data">
        <b>Select image to upload:</b><br><br>
        <input type="file" name="file" id="image"><br><br>
        <button type="submit" name="submit">Upload</button>
    </form>

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
            } else {
                echo "you cannot upload files of this type due to error";
            }

        } else {
            echo "choose a file to upload";
        }
    }


    $result = mysqli_query($db, $sql);

    if ($result == true) {
        echo "File uploaded click <a href=\"homepage.php\">here</a> to return to homepage ";
    }


    ?>

</div>
</body>
</html>