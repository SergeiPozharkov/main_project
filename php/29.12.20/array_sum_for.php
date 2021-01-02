<?php

$arr = [2, 5, 8, 12, 23, 42, 56, 97];

$sum = 0;

for ($i=0; $i <= count($arr); $i++) { 
$sum += $arr[$i];
}

echo $sum;