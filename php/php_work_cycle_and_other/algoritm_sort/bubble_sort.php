<?php

$arr = [16, 23, 15, 27, 43, 13];

print_r($arr);

function bubbleSort($arrSort)
{
    for ($i = 0; $i < count($arrSort); $i++) {

        for ($x = $i + 1; $x < count($arrSort); $x++) {

            if ($arrSort[$i] < $arrSort[$x]) {
                $buff = $arrSort[$i];
                $arrSort[$i] = $arrSort[$x];
                $arrSort[$x] = $buff;
            }
        }
    }
    return $arrSort;
}

print_r(bubbleSort($arr));