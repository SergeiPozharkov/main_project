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
<form action="add.php" method="post">
    <span>Как вас зовут?</span><br><input type="text" name="name"><br><br>
    <span>Как вам мероприятие?
</span><br><textarea name="review" cols="30" rows="10"></textarea><br><br>
    <span>Как вы про нас узнали?</span><br><input type="text" name="source"><br><br>
    <span>Контактный телефн</span><br><input type="text" name="phone"><br><br>
    <input type="submit" value="send">
</form>
</body>
</html>
<?php
