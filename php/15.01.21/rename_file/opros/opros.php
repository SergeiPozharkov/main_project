<?php

$answer = $_POST["answer"];


$data = file("data.txt");
// print_r($data);

$data[$answer] = ($data[$answer] + 1) . "\n";
// echo $answer;


// print_r($_POST);
$saveData = $data[0] . $data[1] . $data[2];
$fp = fopen("data.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);