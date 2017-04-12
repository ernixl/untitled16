<!doctype html >
<html>
<meta charset="utf-8">
<head>
        <title>PHP Login Form without Session</title>
        <link rel ="stylesheet" href ="style.css" type="text/css" />
</head>

<body>

<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br >
    <form method = "post" action = "login.php">
        <label>User name: </label><br >
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password: </label><br>
        <input type="password" name="password" placeholder ="password" /> <br><br>
        <input type = "submit" name = "submit" value = "login"/>
    </form>
    <div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $passwor d; ?></div>
</div>

</body>

</html>