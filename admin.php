<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>

<body>
<a href="index.php">Logoutkkk</a>

<header>
    <h1>Peer to Peer Evaluation</h1>
</header>

<body>

<nav>

    <form action="admin.php" method="post">

        <button type="submit" name="description">Set Coursework</button>
        <button type="submit" name="view">View feedback</button>
        <button type="submit" name="files">View files</button>

    </form>


</nav>

<section>
    <?php

    if (isset($_POST['description'])) {
    ?>
    <div>
        <form action="admin.php" method="post">
            <input type="text" name="coursename" placeholder="course name"><br><br>
            <input type="text" name="title" placeholder="title"><br><br>
            <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
            <button type="submit" name="submit" value="submit">submit</button>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            include 'connect.php';

            $coursename = $_POST['coursename'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (empty($coursename) || empty($title)) {
                echo "<i>error 1: input all data</i><br>";
            } else {
                $sql = "INSERT INTO setcourse( coursename, title, description)
    VALUES ('$coursename','$title', '$description')";
            }

            $result = mysqli_query($db, $sql);

            if ($result == true) {
                header("Location: admin.php");
            } else echo "<i>error 2: failed</i>";
        }
        }
        ?>

        <?php
        if (isset($_POST['view'])){




















        }
        ?>
    </div>
</section>

</body>
</html>