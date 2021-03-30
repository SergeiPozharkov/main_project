<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

include_once "connect.php";

//echo $_GET["id"];

$sql = "SELECT * FROM `vedomost` WHERE `id` = $_GET[id]";
/** @var false|mysqli $link */
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control"><br>
                <input type="text" name="zp" value="<?= $row['zp'] ?>" class="form-control"><br>
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>

</body>
</html>
