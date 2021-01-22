<?php

$answer = $_POST["answer"];

$data = file("data.txt");

$data[$answer] = ($data[$answer] + 1) . " answers" . "\n";

$saveData = $data[0] . $data[1] . $data[2];

$sum = $data[0] + $data[1] + $data[2];

echo 'Сумма ответов = ' . $sum . "<br>";

$fp = fopen("data.txt", "w+");

fwrite($fp, $saveData);

fclose($fp);

echo "Спасибо за ответ!";

echo 'от 18 до 25 ' . ($data[0] / $sum) * 100 . '%' . "<br>";

echo 'от 25 до 30 ' . ($data[1] / $sum) * 100 . '%' . "<br>";

echo 'от 30 до 45 ' . ($data[2] / $sum) * 100 . '%';
