<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>

<header>
    <h1>Peer To Peer Evalion</h1>
</header>

<nav>

    <form action="homepage.php" method="post">

        <button type="submit" name="coursework">View Coursework</button>
        <button type="submit" name="feed">Give feedback</button>
        <button type="submit" name="image">Upload file</button>

    </form>


</nav>

<section>
    <?php

    if (isset($_POST['coursework'])) {
        include 'connect.php';
        $sql = "SELECT coursename, description FROM setcourse";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<b><i> Coursename: </i></b>" . " " . $row["coursename"] . " " . "<b><i> description: </i></b>" . " " . $row["description"] . "<br>";
            }
        } else {
            echo "no results found";
        }
    }
    ?>



    <?php
    if (isset($_POST['image'])) {
        ?>

    <?php

    header('Location: upload_front.php');}


    ?>
</section>


</body>


</html>