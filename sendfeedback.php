<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">

<h1>You can give feedback here</h1>

<div id="form">
    <form action="sendfeedback.php" method="post">
        <input type="text" name="firstname" placeholder="Firstname"><br><br>
        <input type="text" name="lastname" placeholder="Lastname"><br><br>
        <input type="text" name="groupname" placeholder="Groupname"><br><br>
        <input type="text" name="course" placeholder="Course Code"><br><br>
        <textarea name="feed" placeholder="write your feedback here" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit" id="submit">Submit</button>

    </form>

</div>

<?php
echo "hi";
?>



</body>


</html>