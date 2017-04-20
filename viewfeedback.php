<?php
$value = 1;
if ($value == 1){
include 'connect.php';

$sql = "SELECT uid, firstname, lastname, course, feed FROM feedback";
$result = mysqli_query($db, $sql);
?>
<table>
    <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>COURSE</th>
        <th>FEEDBACK</th>
    </tr>

    <?php
    $result = mysqli_query($db, $sql);
    If (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['feed']; ?></td>
            </tr>
            <?php
        }
    }
    }
    ?>
</table>