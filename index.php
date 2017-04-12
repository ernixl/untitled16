<!doctype html >
<html>
<meta charset="utf-8">
<head>
    <title>Peer to Peer Evaluation</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body id="body">

<h1>PHP Peer to Peer Evaluation</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" id="form" action="login.php">
        <label>User name: </label><br>
        <input type="text" name="username" placeholder="username"/><br><br>
        <label>Password: </label><br>
        <input type="password" name="password" placeholder="password"/> <br><br>
        <input type="submit" id="submit" name="submit" value="login"/>
    </form>
    <div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $passwor d; ?></div>
</div>

</body>

</html>