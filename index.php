<!DOCTYPE html>
<html>
<head>
    ffffffllllllllllllllll
</head>
<body>
<p>
    <?php
    $DB_SERVER = "http://letseehowitgoes.azurewebsites.net/";
    $DB_USERNAME = "ernixl1605@hotmail.com";
    $DB_PASSWORD = "kuno7730";
    $DB_DATABASE = "first";
$db = mysqli_connect( $DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
    if (!$db) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }


    $db->close();

    ?>

</p>
</body>
</html>