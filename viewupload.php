<!DOCTYPE html>
<html>
<body>

<?php
include 'connect.php';

$sql = "SELECT id, name, image FROM image";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<br> " . $row["id"] . " <b><i> Name : </i></b> " . $row["name"] . "<b><i> Image: </i></b> " . $row["image"] . "<br>";
    }
} else {
    echo "no results found";
}

?>

</body>
</html>