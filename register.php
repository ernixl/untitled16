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
        <button type="submit" name="submit" value="submit">SignUp</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'connect.php';

        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password == true && $password2 == true) {
            if ($first == true && $last == true){

                if ($password == $password2) {

                    $sql = "INSERT INTO login (first, last, email, username, password)
        VALUES ('$first','$last','$email','$username','$password')";
                } else {
                    echo "<i>password mismatch</i><br>";
                }

            } else {
                echo "<i>empty name field</i><br>";
            }
        } else {
            echo "<i>enter password field</i>";
        }
    }

    $result = mysqli_query($db, $sql);
    if ($result == true) {
        header("Location: index.php");
        echo "<b><i> Account sucessfully created</i></b>";
    }

    ?>
</div>

</body>
</html>