<?php

$str = "Всем <b>Привет</b> <b>Андрей</b> <b>Как</b> <b>Твои</b> <b>Дела</b> !!!";

$pat = "/<b>(.*?)<\/b>/i";

$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);

echo $str2;