<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];

$result = 0;

if ($q1 == 'c') {
    $result++;
}

if ($q2 == 'b') {
    $result++;
}

if ($q3 == 'c') {
    $result++;
}

if ($q4 == 'a') {
    $result++;
}
if ($q5 == 'a') {
    $result++;
}

if ($q6 == 'b') {
    $result++;
}

if ($q7 == 'b') {
    $result++;
}

if ($q8 == 'a') {
    $result++;
}

if ($q9 == 'c') {
    $result++;
}

if ($q10 == 'a') {
    $result++;
}

if ($result >= 5) {
    echo 'Поздравляем, вы прошли тест!' . '<br>';
    echo 'Количество правильных ответов - ' . $result;
} else {
    echo 'Сожалеем, вы  не прошли тест!' . '<br>';
    echo 'Количество правильных ответов - ' . $result;
}
