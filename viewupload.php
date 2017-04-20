<html>
<head>
    <title>set course work</title>
</head>
<body>

<?php
include 'connect.php';

$sql = "SELECT id, name, image FROM image";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {

        $id = $row["id"];
        $name = $row["name"];
        $path = $row["image"];

        echo $id . "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
    }
} else {
    echo "no results found";
}

?>

</body>
</html>