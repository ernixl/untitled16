<!DOCTYPE html>
<html>
<head>
    <title>Register your details</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body id="body">
<h1>You can give upload files here</h1>
<div id="form">

<form action="upload_back.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="image"><br><br>
    <input type="submit" name="submit" value="Upload">
</form>


</body>
</html>