<?php include "add.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "table.php" ?>
    <br>
    <form action="?" method="post">
        <span><b>Name:</b></span><input type="text" name="name"><br><br>
        <span><b>Email:</b></span><input type="text" name="email"><br><br>
        <span><b>Messag:</b></span><br><textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>