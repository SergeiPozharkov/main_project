<?php

$arr = [2, 5, 8, 12, 23, 42, 56, 97];

$sum = 0;

foreach ($arr as $value) {
    $sum += $value;
}

echo $sum;