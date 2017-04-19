<!DOCTYPE html>
<html>
<body>

<?php
include 'connect.php';

$sql = "SELECT id, firstname, lastname, groupname, course, feed FROM feedback";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result)  > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ". $row["id"]. " - Nam: ". $row["firstname"]. " " . $row["lastname"] .$row["groupname"] .$row["course"] .$row["feed"] . "<br>";
    }
} else {
    echo "00 results";
}

?>

</body>
</html>