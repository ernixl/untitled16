<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<?php
include 'connect.php';

$sql = "SELECT uid, firstname, lastname, groupname, course, feed FROM feedback";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<br> " . $row["uid"] ." ". " <b><i> Name: </i></b> " ." ". $row["firstname"] ." ". "<b><i> LastName: </i></b> " ." ". $row["lastname"] ." ". "<b><i> Group: </i></b>" ." ". $row["groupname"] ." ". "<b><i> Course: </i></b>" ." ". $row["course"] ." ". "<b><i> Feedback: </i></b>" ." ". $row["feed"] . "<br>";
    }
} else {
    echo "no results found";
}

?>

</body>
</html>