<?php
$DB_SERVER = "127.0.0.1:57075";
$DB_USERNAME = "root";
$DB_PASSWORD = "password";
$DB_DATABASE = "login";

$db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);


?>






<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
</head>
<body>
<h1>Register to login</h1>
<div>
    <h3>Register to login</h3>

    <form>
        <table>

            <tr>
                <td>name:</td>
                <td><input type="text" name="name" class="textInput"></td>
            </tr>

            <tr>
                <td>surname:</td>
                <td><input type="text" name="surname" class="textInput"></td>
            </tr>
            <tr>
                <td>username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>

            <tr>
                <td>email:</td>
                <td><input type="email" name="email" class="textInput"></td>
            </tr>

            <tr>
                <td>password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>

            <tr>
                <td>password:</td>
                <td><input type="password" name="password2" class="textInput"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="register" value="Register"></td>
            </tr>


        </table>


    </form>
</div>


</body>


</html>