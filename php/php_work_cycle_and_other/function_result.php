<?php

function Result($num1, $num2, $num3){
    $res = ($num1 - $num2) / $num3;
    return $res;
}

$num1 = 12;
$num2 = 2;
$num3 = 2;

echo 'Результат = ' . Result($num1, $num2, $num3);

// функция определяющая результат от вычитания и последующего деления