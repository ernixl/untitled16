<?php


include 'connect.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$result = mysqli_query("SELECT *  FROM login WHERE uid = '$uid' and pwd = '$pwd'")

or die("failed to query database" . mysqli_error());

$row = mysqli_fetch_array($result);

if ($row['uid'] == $uid && $row['pwd'] == $pwd) {
    header("Location: homepage.php");

} else {
    echo "login failed";
}
?>