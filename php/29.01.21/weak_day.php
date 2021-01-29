<?php

$arrDate = ["Mondey" => "Понедельник", "Tuesday" => "Вторник", "Wednesday" => "Среда", "Thursday" => "Четверг", "Friday" => "Пятница", "Saturday" => "Суббота", "Sunday" => "Воскресение"];

$d = date('l');
$resDate = $arrDate[$d];

echo $resDate;
