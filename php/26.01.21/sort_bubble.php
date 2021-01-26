<?php

function bubbleSort($arrray)
{

    for ($n = count($arrray) - 1; $n > 0; $n--) {
        for ($i = 0; $i < $n; $i++) {
            if ($arrray[$i] > $arrray[$i + 1]) {
                $buff = $arrray[$i];
                $arrray[$i] = $arrray[$i + 1];
                $arrray[$i + 1] = $buff;
            }
        }
    }
    return $arrray;
}

$arr = [2, 4, 3, 5, 9];

// $arr = ["ab","bc", "vc", "na", "ga"]; // Тоже самое только с буквами.

print_r($arr);

$arr2 = bubbleSort($arr);

print_r($arr2);
