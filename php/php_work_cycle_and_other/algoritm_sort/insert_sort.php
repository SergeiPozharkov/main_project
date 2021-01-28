<?php

$arr = [3, 15, 7, 49, 27];

function insertSort($arrSort)
{
    // для каждого $arrSort[$i] начиная со второго элемента
    for ($i = 1; $i < count($arrSort); $i++) {

        $buff = $arrSort[$i];

        for ($x = $i - 1; $x >= 0 and $arrSort[$x] > $buff; $x--) { // and эквивалентен &&
            //сдвигаем элементы вправо, пока выполняется условие $arrSort[$x] > $arrSort[$i] - она же $buff
            $arrSort[$x + 1] = $arrSort[$x];
        }
            // на оставшееся после сдвига место, ставим $arrSort[$i]
        $arrSort[$x + 1] = $buff;
    }
    return $arrSort;
}

print_r(insertSort($arr));
