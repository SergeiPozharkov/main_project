<?php

include "Ul.php";

$ul = new Ul();

echo $ul->setData(["Иванов", "Петров", "Сидоров"])->setType("square")->html() . "<br>";
echo $ul->setType("circle")->html();