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
function dateFormat($time) {
    $arrWeakDay = [
         "Monday" => "Понедельник",
         "Tuesday" => "Вторник",
         "Wednesday" => "Среда",
         "Thursday" => "Четверг",
         "Friday" => "Пятница",
         "Saturday" => "Суббота",
         "Sunday" => "Воскресенье"
     ];
    $arrMounth = [
             'January' => "Января",
             'February' => "Февраля",
             'March' => "Марта",
             'April' => "Апреля",
             'May' => "Мая",
             'June' => "Июня",
             'July' => "Июля",
             'August' => "Августа",
             'September' => "Сентября",
             'October' => "Октября",
             'November' => "Ноября",
             'December' => "Декабря"
         ];
    $weakDay = $arrWeakDay[date("l", $time)];
    $mounth = $arrMounth[date("M", $time)];
//   return date("l", $time);
//    return date("M", $time);
    return date("$weakDay $mounth", $time);

}