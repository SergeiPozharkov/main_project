<?php

function Square($num){
    $res = $num * $num;
    return $res;
}

$num = 3;

echo $num . '^2 = ' . Square($num);

// функция возводящая число в квадрат