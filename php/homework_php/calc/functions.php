<?php

ini_set('display_errors', 'Off');

function calculated()
{

    $arrData = explode(" ", file_get_contents("data.txt"));
    // print_r($arrData);
    // if (!empty($arrData[0]) && !empty($arrData[1]) && !empty($arrData[2])) {

    if ($arrData[1] == "+") {
        // echo "Операция: $arrData[0]$arrData[1]$arrData[2]";
        echo "Сумма = " . $arrData[0] + $arrData[2];
        return $arrData;
    }
    if ($arrData[1] == "-") {
        // echo "Операция: $arrData[0]$arrData[1]$arrData[2]";
        echo "Разность = " . $arrData[0] - $arrData[2];
        return $arrData;
    }
    if ($arrData[1] == "/") {
        // echo "Операция: $arrData[0]$arrData[1]$arrData[2]";
        echo "Частное от деления = " . $arrData[0] / $arrData[2];
        return $arrData;
    }
    if ($arrData[1] == "*") {
        // echo "Операция: $arrData[0]$arrData[1]$arrData[2]";
        echo "Произведение = " . $arrData[0] * $arrData[2];
        return $arrData;
    }
    // }
}

function operation()
{
    $arrData = explode(" ", file_get_contents("data.txt"));

    if ($arrData[1] == "+" || $arrData[1] == "-" || $arrData[1] == "/" || $arrData[1] == "*") {
        echo "Операция: $arrData[0]$arrData[1]$arrData[2]";
        return $arrData;
    }
}
