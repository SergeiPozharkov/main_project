<?php

$str = "not to be";
$str2 = "not tobe be";

$pat = "/^((be)|(not\sto\sbe))$/i";

if (preg_match($pat, $str)) {
    echo 'Вхождение найдено';
} else {
    echo 'Вхождение не найдено';
}
