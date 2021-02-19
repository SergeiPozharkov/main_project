<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="put.php" method="post">
        <input type="text" name="neme">
        <input type="submit" value="ok">
    </form>

    <?= $_SESSION["username"] ?? "Вы не вошли в систему!" ?>
    <br>
    <a href="page1.php"> page1</a><br>
    <a href="out.php">log out</a>
</body>

</html>