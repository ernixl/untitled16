<?php
include_once('connect.php');


if (isset($_GET['uid'])) {
    $sql = "SELECT first, last, email, admin FROM login where uid = $uid";
    $result = mysqli_query($db, $sql);


    If (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['first']; ?></td>
                <td><?php echo $row['last']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['admin']; ?></td>
            </tr>
            <?php
        }
    }
} else echo "error";
