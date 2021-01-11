<?php

function Cube($num){
    $res = $num * $num * $num;
    return $res;
}

$num = 3;

echo $num . '^3 = ' . Cube($num);

// функция возводящая число в куб