<?php

function grainsSum($width = 8, $height = 8)
{

    $grainsSum = 0;

    for ($i = 0; $i < $width * $height; $i++) {
        $grainsSum += 2 ** $i;
    }
    return $grainsSum;
}

$width = 2;
$height =2;

echo grainsSum() . '<br>';

echo grainsSum($width, $height);