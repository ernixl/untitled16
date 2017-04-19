<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>North Lab</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">


    <link href="bootstrap-material-design.css" rel="stylesheet">
    <link href="ripples.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <header class="col-md-12">
        <h1>Peer To Peer Evaluation</h1>
        <h2>Web Application</h2>
    </header>
    <nav class="col-md-12 navbar navbar-primary">
        <div class="container-fluid">
            <ul class="nav navbar-nav">

                <h3>Enter your login information </h3>


                <form action="index.php" method="post">

                    Username: <input type="text" name="username" placeholder="Username"><br><br>
                    Password: <input type="password" name="password" placeholder="Password"><br><br>
                    <button type="submit" name="register" id="submit">Register</button>
                    <button type="submit" name="submit" id="submit" value="Login">Login</button>


                </form>

    </nav>





    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include 'connect.php';

        $sql = "SELECT admin FROM login WHERE username='$username' and password='$password'";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) == 1 && $row['admin'] == 0) {
            header("location: homepage.php");
        } elseif (mysqli_num_rows($result) == 1 && $row['admin'] == 1) {
            header("Location: admin.php");
        } else
            echo "<i>error: Incorrect username or password</i>";
    }

    if (isset($_POST['register'])) {
        header('Location: register.php');
    }

    ?>


</div>


</body>

</html>