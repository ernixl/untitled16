<!DOCTYPE html>
<html>
<head>
    ffffffffffffffkkkkkkkkkkkkkooooooooooooo
</head>
<body>
<p>
    <?php
    $connectstr_dbhost = 'localhost';
    $connectstr_dbname = 'first';
    $connectstr_dbusername = 'root';
    $connectstr_dbpassword = '';
    foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }
        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    }
    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $result=mysqli_query($connectstr_dbname,$connectstr_dbhost);
    while($row = $result->fetch_array())
    {
      $movieTitle = $row['title'];
echo "<p>" . $movieTitle . "</p>";
}

    ?>

</p>
</body>
</html>