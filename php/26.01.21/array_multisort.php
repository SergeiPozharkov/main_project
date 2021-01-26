<?php

$arr1 = [4, 1, 2, 5, 3];
$arr2 = ["четыре", "один", "два", "пять", "три"];

array_multisort($arr1, $arr2);

print_r($arr1);
print_r($arr2);
