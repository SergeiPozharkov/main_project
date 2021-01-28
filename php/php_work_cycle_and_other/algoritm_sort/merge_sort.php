<?php

$arr = [13, 2, 15, 27, 56, 42];

function mergeSort($arrSort)
{
    $count = count($arrSort);

    if ($count <= 1) {
        return $arrSort;
    }

    $left  = array_slice($arrSort, 0, (int)($count / 2));
    $right = array_slice($arrSort, (int)($count / 2));

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{

    $returnedArray = [];

    while (count($left) > 0 and count($right) > 0) {

        if ($left[0] < $right[0]) {
            array_push($returnedArray, array_shift($left));
        } else {
            array_push($returnedArray, array_shift($right));
        }
    }

    array_splice($returnedArray, count($returnedArray), 0, $left);
    array_splice($returnedArray, count($returnedArray), 0, $right);

    return  $returnedArray;
}

print_r(mergeSort($arr));
