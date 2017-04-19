<!DOCTYPE html>
<html>
<body>

<?php
include 'connect.php';

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($db, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

?>

</body>
</html>