<!DOCTYPE html>
<html>
<head>
    oooooooo
</head>
<body>
<p>
    <?php
    $DB_SERVER = "127.0.0.1:57075";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "password";
    $DB_DATABASE = "first";
    $sql = "SELECT title FROM marvelmovies";
    $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
    if (!$db) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

        echo "<p>" . $sql . "</p>";


    $db->close();

    ?>

</p>
</body>
</html>