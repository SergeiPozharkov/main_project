<?php

include "TList.php";
include "Ol.php";
include "Ul.php";

$ol = new OlMap();

echo $ol->setData1(["Иванов", "Петров", "Сидоров"])->setType("1")->html() . "<br>";
echo $ol->setType("A")->html() . "<br>";


$ul = new Ul();

echo $ul->setData(["Иванов", "Петров", "Сидоров"])->setType("square")->html() . "<br>";
echo $ul->setType("circle")->html();