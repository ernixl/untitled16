<html>
<head>
    <title>set course work</title>
    <link rel="stylesheet" href="styling.css">
</head>

<body>
<a href="index.php">Logout</a>

<header>
    <h1>Peer to Peer Evaluation</h1>
</header>

<body>

<nav>

    <form action="admin.php" method="post">

        <button type="submit" name="set">Set Coursework</button>
        <button type="submit" name="view">View feedback</button>
        <button type="submit" name="files">View files</button>

    </form>


</nav>


<a href="viewupload.php">view uploads</a>
<a href="setcoursework.php">setcoursework</a>


<section>

    <?php
    if (isset($_POST['set'])) { ?>
        <article>

            <form action="admin.php?function" method="post">
                <input type="text" name="coursename" placeholder="course name"><br><br>
                <input type="text" name="title" placeholder="title"><br><br>
                <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea><br><br>
                <button type="submit" name="summit">Submit</button>
            </form>

        </article>

        <?php
        if (isset($_GET['function'])) {
            include 'connect.php';

            $coursename = $_POST['coursename'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (empty($coursename) || empty($title)) {
                echo "<p><b><i>error 1: input all data</i></b></p>";
            } else {
                $sql = "INSERT INTO setcourse( coursename, title, description)
    VALUES ('$coursename','$title', '$description')"; echo "success";
            }


            $result = mysqli_query($db, $sql);

            if ($result == true) {
                header("Location: admin.php");
            } else echo "<p><b><i>error 2: failed</i></b></p>";
        }
    }
    ?>
    }


</section>

</body>
</html>