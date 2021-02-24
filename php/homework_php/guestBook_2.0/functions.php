<?php

function smile($text)
{
    return preg_replace([
        "/\:\)/",
        "/\:\(/",
        "/\;\)/"
    ], [
        "😃",
        "😐",
        "😉"
    ], $text);
}

function censure($text)
{
    return preg_match_all("/.*дурак.*/iu", $text);
}
// date("d n Y l H-i-s")

function dateAndTimeFormat($date_time)
{
    $arrMounth = [
        "1" => "Января",
        "2" => "Февраля",
        "3" => "Марта",
        "4" => "Апреля",
        "5" => "Майя",
        "6" => "Июня",
        "7" => "Июля",
        "8" => "Августа",
        "9" => "Сентября",
        "10" => "Октября",
        "11" => "Ноября",
        "12" => "Декабря"
    ];

    $arrWeakDay = [
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    ];

    $weakDay = $arrWeakDay[date("l", $date_time)];
    
    $month = $arrMounth[date("n", $date_time)];

    return date("d $month Y ($weakDay) H:i:s", $date_time);
}