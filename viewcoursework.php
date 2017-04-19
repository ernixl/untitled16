<html>
<head>
    <title>set course work</title>
</head>
<body>

<?php
include 'connect.php';

$sql = "SELECT coursename, description FROM setcourse";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<b><i> Coursename: </i></b>" ." ". $row["coursename"] ." ". "<b><i> description: </i></b>" ." ". $row["description"] . "<br>";
    }
} else {
    echo "no results found";
}

?>

</body>
</html>