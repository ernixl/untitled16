<html></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>North Lab</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">


    <link href="bootstrap-material-design.css" rel="stylesheet">
    <link href="ripples.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <header class="col-md-12">
        <h1>Peer To Peer Evaluation</h1>
        <h2>Web Application</h2>
    </header>
    <nav class="col-md-12 navbar navbar-primary">
        <div class="container-fluid">
            <ul class="nav navbar-nav">

                <li><a href="viewcoursework.php">View Coursework</a></li>
                <li><a href=<?php echo "bootstrap.php?feedback" ?>>Give Feedback</a></li>
                <li><a href="upload_front.php">Upload File</a></li>

    </nav>
    <main class="col-md-12">
        <div id="experimentContainer" class="row">
            <article class="col-md-12">

                <h3>Experiment Name</h3>

                <?php

                if (isset($_GET['feedback'])){
                ?>
                <h1>You can give feedback here</h1>

                <div id="form">
                    <form action="sendfeedback.php" method="post">
                        <input type="text" name="firstname" placeholder="Firstname"><br><br>
                        <input type="text" name="lastname" placeholder="Lastname"><br><br>
                        <input type="text" name="groupname" placeholder="Groupname"><br><br>
                        <input type="text" name="course" placeholder="Course Code"><br><br>
                        <textarea name="feed" placeholder="write your feedback here" id="" cols="30"
                                  rows="10"></textarea>
                        <button type="submit" name="submit" id="submit">Submit</button>

                    </form>

                    <?php

                    if (isset($_POST['submit'])) {

                        include 'connect.php';

                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $groupname = $_POST['groupname'];
                        $course = $_POST['course'];
                        $feed = $_POST['feed'];


                        if (empty($feed) || empty($course)) {
                            echo "input all data";
                        } else {
                            $sql = "INSERT INTO feedback (firstname, lastname, groupname, course, feed)
                          VALUES ('$firstname','$lastname','$groupname','$course','$feed')";
                        }

                        $result = mysqli_query($db, $sql);

                        if ($result == true) {
                            echo "<b>feedback sent successfully, click <a href=\"homepage.php\">here</a> to return to homepage</b>";
                        } else echo "some error occured";
                    }}
                    ?>
                </div>


                ;
                }

                ?>
            </article>

        </div><!--End of Experiment Container-->
    </main>

</div>



</body>


</html>