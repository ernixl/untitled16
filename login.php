<?php

$username=$_POST['username'];
$password=$_POST['password'];

include 'connect.php';

$sql ="SELECT uid FROM login WHERE username='$username' and password='$password'";

    $result =mysqli_query($db,$sql);

if( mysqli_num_rows($result) == 1)
 {
     header("location: homepage.php");
 }else
 {
     echo "Incorrect username or password. ";
 }

?>



}
?>