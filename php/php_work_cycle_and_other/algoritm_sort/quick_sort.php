<?php

$arr = [5, 7, 68, 32, 12, 27];

function quickSort($arrSort) {
    $count= count($arrSort);
    if ($count <= 1) {
        return $arrSort;
    }
 
    $first_val = $arrSort[0];
    $left_arr = [];
    $right_arr = [];
 
    for ($i = 1; $i < $count; $i++) {
        if ($arrSort[$i] <= $first_val) {
            $left_arr[] = $arrSort[$i];
        } else {
            $right_arr[] = $arrSort[$i];
        }
    }
 
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
 
    return array_merge($left_arr, array($first_val), $right_arr);
}
print_r(quickSort($arr));
