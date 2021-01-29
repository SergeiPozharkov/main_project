<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Определение возроста</h1>
<form action="?" method="post">
    <span>Выберите день</span><input type="date" name="date" id="">
    <input type="submit" value="Определить возрост">
</form>
</body>

</html>
<?php

$arrDate = ["Mondey" => "Понедельник", "Tuesday" => "Вторник", "Wednesday" => "Среда", "Thursday" => "Четверг", "Friday" => "Пятница", "Saturday" => "Суббота", "Sunday" => "Воскресение"];

$d = date('l');
$resDate = $arrDate[$d];
// echo $resDate
$date = explode("-", $_POST["date"]);
$year = $date[0];
$month = $date[1];
$day = $date[2];
$second = time() - mktime(0, 0, 0, $month, $day, $year);
// $days = floor($second  / (60 * 60 * 24));
// echo date($days);



?>
