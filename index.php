<!doctype html >
<html>
<meta charset="utf-8">
<head>
    <title>Peer to Peer Evaluation</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body id="body">

<h1>PHP Peer to Peer Evaluation</h1>
<div id="form">

    <h3>Enter your login information or click <a href="register.php">here</a> to register</h3>
    <br>
    <form method="post" action="login.php">
        <table>

            <tr>
                <td>username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <br><br>

            <tr>
                <td>password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="login" class="textInput"></td>
            </tr>

    </form>
    <div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $passwor d; ?></div>
</div>

</body>

</html>