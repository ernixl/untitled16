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

    <h3>Login Form</h3>
    <br>
    <form method="post"  action="login.php">
        <p>
        <label>Username: </label><br>
        <input type="text" name="username" placeholder="username"/>
        </p>
        <p>
        <label>Password: </label><br>
        <input type="password" name="password" placeholder="password"/>
            <br></p>
        <input type="submit" id="submit" name="submit" value="login"/>
    </form>
    <div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $passwor d; ?></div>
</div>

</body>

</html>