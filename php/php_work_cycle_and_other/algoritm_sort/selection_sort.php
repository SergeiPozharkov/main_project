<?php

$arr = [3, 27, 52, 47, 29, 17];

function selectionSort($arrSort)
{
    for ($i = 0; $i < count($arrSort); $i++) {

        $min = $i;

        for ($x = $i + 1; $x < count($arrSort); $x++) {

            if ($arrSort[$x] < $arrSort[$min]) {
                $min = $x;
            }
        }

        $buff = $arrSort[$i];
        $arrSort[$i] = $arrSort[$min];
        $arrSort[$min] = $buff;
        
    }

    return $arrSort;
}
print_r(selectionSort($arr));
