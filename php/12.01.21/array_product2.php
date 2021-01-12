<?php

function array_product2($arr)
{
    $product = 1;
    foreach ($arr as $value) {
        $product *= $value;
    }
    return $product;
}
$arr = [1, 2, 3, 4, 5, 6];

echo array_product2($arr); //720
