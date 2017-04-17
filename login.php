<?php

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "username and password required";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT uid FROM coursework WHERE username = '$username' and
password ='$password' ";

    $result = mysqli_query($db, $sql);

    if ($username == laura and $password == brai) {
        echo "logging in as <b> Admin </b> click <a href='admin.php'>here</a> to continue" ;}

    elseif (mysqli_num_rows($result) == 1) {
        header("location: homepage.php"); // Redi recti ng To anot her Page
    } else {
        echo "Go back and enter a correct username and password . ";
    }

}
?>