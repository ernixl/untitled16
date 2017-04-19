<?php
if (isset($_POST['submit'])) {
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
