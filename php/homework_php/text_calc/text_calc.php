<?php

$wordNum = [
    "ноль",
    "один",
    "два",
    "три",
    "четыре",
    "пять",
    "шесть",
    "семь",
    "восемь",
    "девять",
    "десять"
];
$a = str_replace(" ", "", $_POST["num"]);

$b = str_split($a);

$znak = array_search("+", $b);

$i1 = substr($a, 0, $znak);

$i2 = substr($a, $znak + 1, strlen($a));

$index1 = array_search($i1, $wordNum);

$index2 = array_search($i2, $wordNum);

$sum = $index1 + $index2;

echo $wordNum[$sum];
