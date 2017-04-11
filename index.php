<!DOCTYPE html>
<html>
<head>
    oo
</head>
<body>
<p>
    <?php
    $DB_SERVER = "127.0.0.1:57075";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "password";
    $DB_DATABASE = "first";
    $sql = "SELECT title, yearReleased FROM marvelmovies";
    $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
    if (!$db) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

$result = $db->query($sql);

while( $row = $result->fetch_array()){

        echo "<p>". $row['title,yearReleased'] . "</p>";}


    $result->close();

    $db->close();

    ?>

</p>
</body>
</html>