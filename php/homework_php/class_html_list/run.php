<?php

include "HtmlList.php";

$list = new HtmlList(['Иванов', 'Петров', 'Сидоров']);

echo $list
    ->setNum("1")
    ->html();
echo $list
    ->setNum("I")
    ->html();
echo $list
    ->setNum("a")
    ->html();
