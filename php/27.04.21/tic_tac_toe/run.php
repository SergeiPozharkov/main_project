<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php

include "autoLoader.php";

$tictac = new Tictac(3);

//print_r
($tictac
    ->putCross(2, 1)
    ->putZero(1, 1)
    ->putCross(2, 2)
    ->putZero(0, 2)
    ->putCross(2, 0)
    ->getMap()
);

$map = new Map();
echo $map
    ->setMap($tictac->getMap())
    ->getHtmlTable();

$tictac->checkWinnerByCol();
?>
</body>
</html>
