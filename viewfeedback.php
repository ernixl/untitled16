<!DOCTYPE html>
<html>
<body>

<?php
include 'connect.php';

$sql = "SELECT uid, firstname, lastname, groupname, course, feed FROM feedback";
$result = mysqli_query($db, $sql);

?>

<td>Login Page Database</td>
<table border="1">
    <tr>
        <th>uid</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>groupname</th>
        <th>course</th>
        <th>feed</th>
    </tr>

    <?php

    while ($row = mysqli_fetch_array($sql)) //<!-- Fetch each row from signup Table  -->
    {
        ?>
        <tr>
            <td><?php echo $row['uid']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['groupname']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['feed']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>