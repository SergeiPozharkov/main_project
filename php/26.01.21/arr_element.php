<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [1, 2, 3, 13, 10];

print_r(count($arr)) . "\n";

print_r(array_sum($arr)) . "\n";

print_r(array_merge($arr, $arr2)) . "\n";

print_r(array_product($arr)) . "\n";

print_r(array_reverse($arr)) . "\n";

print_r(array_search(2, $arr)) . "\n";

print_r(in_array(3, $arr)) . "\n";
