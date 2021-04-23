<?php

$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r($a1);

array_walk($a1, function (&$item, $key, $sp) {
    $item = "$key $sp $item";
}, "=");

print_r($a1);


$zp = [
    ['Ivanov', 50],
    ['Igor', 200],
    ['Irina', 500]
];

array_walk($zp, function (&$item) {
    if ($item[1] < 100) {
        $item[1] *= 2;
    }
});

print_r($zp);