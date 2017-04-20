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


<a href="viewupload.php">view</a>
<a href="setcoursework.php">ggggggset</a>


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
        if (isset($_POST['function'])) {
            echo "you";
        }
    }
    ?>


</section>

</body>
</html>