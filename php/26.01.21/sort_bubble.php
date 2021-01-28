<?php

function bubbleSort($array)
{
    for ($n = count($array) - 1; $n > 0; $n--) {

        for ($i = 0; $i < $n; $i++) {

            if ($array[$i] > $array[$i + 1]) {

                $buff = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $buff;
            }
        }
    }
    return $array;
}

$arr = [2, 4, 3, 5, 9];

// $arr = ["ab","bc", "vc", "na", "ga"]; // Тоже самое только с буквами.

print_r($arr);

$arr2 = bubbleSort($arr);

print_r($arr2);
