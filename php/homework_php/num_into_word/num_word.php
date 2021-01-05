<?php

$num = $_POST["num"];
$arrWrite = str_split($num);

$wordNum = [
    0 => "ноль",
    1 => "один",
    2 => "два",
    3 => "три",
    4 => "четыре",
    5 => "пять",
    6 => "шесть",
    7 => "семь",
    8 => "восемь",
    9 => "девять",
    10 => "десять"
];

foreach ($arrWrite as $value) {
    if (is_numeric($value)) {
        echo $wordNum[$value] . '&nbsp;';
    } else {                             //or elseif(!is_numeric($value))
        echo $value;
    }
}
