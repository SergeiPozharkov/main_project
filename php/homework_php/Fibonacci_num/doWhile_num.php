<?php
$f0 = 0;
$f1 = 1;
$n = $_POST["n"];
$i = 0;

if ($n < 2) {
    echo $f0 . "&nbsp;";
    echo $f1 . "&nbsp;";
} else {
    echo $f0 . "&nbsp;";
    echo $f1 . "&nbsp;";
    do {
        $fn = $f0 + $f1;
        $f0 = $f1;
        $f1 = $fn;
        $i++;
        echo $f1 . "&nbsp;";
    } while ($i < $n - 1);
}
echo ' - Ряд чисел Фибоначчи до N.';
// Выводит N элементов ряда Фибоначчи используя цикл do While.