<?php

$num = [
    "ноль",
    "один",
    "два",
    "три",
    "четыре",
    "пять",
    "шесть",
    "семь",
    "восемь",
    "девять"
];

foreach (str_split($_POST["num"]) as $value) {
    echo $num[$value] . '&nbsp;';
}
