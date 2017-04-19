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
        <h1>Peer To Peer Evaluat</h1>
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
                    header('Location: index.php');
                }

                ?>

        </div><!--End of Experiment Container-->
    </main>

</div>
</body>


</html>