<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
<h1>Register to log</h1>

<div id="frm">
    <h3>Register to login</h3>

    <form action="register.php" method="post">
        <input type="text" name="first" placeholder="Firstname"><br><br>
        <input type="text" name="last" placeholder="Lastname"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="password2" placeholder="Repeat Password"><br><br>
        <button type="submit" >SignUp</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    include 'connect.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if (empty($password) || empty($password2)) {
        echo "<br><b><i>enter password field</b></i><br>";
    }

    if ($pwd != $pwd2) {
        echo "<b><i>password mismatch</b></i>";
    } else {
        $sql = "INSERT INTO login (first, last, email, username, password)
    VALUES ('$first','$last','$email','$username','$password')";
    }

    $result = mysqli_query($db, $sql);

    if ($result == true) {
        header("Location: index.php");
    }
}
?>

</body>


</html>