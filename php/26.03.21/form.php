<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<form action="add.php" method="post">
    <input type="text" placeholder="Enter your name" name="name"><br><br>
    <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea><br><br>
    <input type="submit" value="Ok">
</form>
<br>
<?php

include "bd.php";

?>
</body>
</html>

