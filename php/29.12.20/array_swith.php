<?php

$num = $_POST["num"];

switch ($num) {
    case 'ноль':
        $str = 'zero';
        break;
    case 'один':
        $str = 'one';
        break;
    case 'два':
        $str = 'two';
        break;
    case 'три':
        $str = 'three';
        break;
    case 'четыре':
        $str = 'four';
        break;
    case 'пять':
        $str = 'five';
        break;
    case 'шесть':
        $str = 'six';
        break;
    case 'семь':
        $str = 'seven';
        break;
    case 'восемь':
        $str = 'eight';
        break;
    case 'девять':
        $str = 'nine';
        break;

    default:
        $str = 'Такого слова нет в словаре!';
        break;
}

echo $str . ' - перевод';
