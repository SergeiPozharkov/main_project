<?php

function array_sum2($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}
$arr = [1, 2, 3, 4, 5, 6];

echo array_sum2($arr); //21
