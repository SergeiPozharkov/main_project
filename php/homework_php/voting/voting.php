<?php

$answer = $_POST["answer"];

$data = file("data.txt");

$data[$answer] = ($data[$answer] + 1) . " answers" . "\n";

$saveData = $data[0] . $data[1] . $data[2];

$fp = fopen("data.txt", "w+");

fwrite($fp, $saveData);

fclose($fp);