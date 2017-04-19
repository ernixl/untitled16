<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body id="body">
<h1>You can give upload files here</h1>
<div id="form">

<form action="upload_front.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="image"><br><br>
    <input type="submit" name="submit" value="Upload">
</form>

    <?php
    if (isset($_POST['submit'])) {
        require ("connect.php");
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

    if ($result == true){
        header("Location: index.php");}



    ?>


</body>
</html>