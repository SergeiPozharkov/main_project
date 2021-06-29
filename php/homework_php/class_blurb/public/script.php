<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

require '../vendor/autoload.php';

use classes\Blurb;
use classes\Car;
use classes\Ford;
use classes\Opel;
use classes\Reno;

(new Blurb(new Car($_POST['name'],
    $_POST['color'],
    $_POST['price'],
    $_POST['max_speed'],
    $_POST['engine_volume'],
    $_POST['fuel_consumption']
)))->blurbGeneration();

//(new Blurb(new Ford($_POST['name'],
//    $_POST['color'],
//    $_POST['price'],
//    $_POST['max_speed'],
//    $_POST['engine_volume'],
//    $_POST['fuel_consumption']
//)))->blurbGeneration();

//(new Blurb(new Opel($_POST['name'],
//    $_POST['color'],
//    $_POST['price'],
//    $_POST['max_speed'],
//    $_POST['engine_volume'],
//    $_POST['fuel_consumption']
//)))->blurbGeneration();

//(new Blurb(new Reno($_POST['name'],
//    $_POST['color'],
//    $_POST['price'],
//    $_POST['max_speed'],
//    $_POST['engine_volume'],
//    $_POST['fuel_consumption']
//)))->blurbGeneration();
?>
<br>
<br>
<a href="index.php" class="btn btn-primary">Вернуться</a>
</body>
</html>
