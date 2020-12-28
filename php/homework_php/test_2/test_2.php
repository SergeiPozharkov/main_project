<?php

$solarSystem = $_POST["q4"];
$sum = 0;

if ($space = $_POST["world"]) {
    $sum++;
}
if ($firstAnimal = $_POST["dogLaika"]) {
    $sum++;
}
if ($moonShot = $_POST["Luna_3"]) {
    $sum++;
}
if ($solarSystem == '1') {
    $sum++;
}
if ($east = $_POST["East"]) {
    $sum++;
}
if ($comet = $_POST["cometHalley"]) {
    $sum++;
}
if ($firstAstronaut = $_POST["Shepard"]) {
    $sum++;
}
if ($distance = $_POST["megaparsecs"]) {
    $sum++;
}
if ($galaxy = $_POST["milkyWay"]) {
    $sum++;
}
if ($spaceCompany = $_POST["Mask"]) {
    $sum++;
}
if ($sum >= 5) {
    echo 'Поздравляем, вы обладаете общирными знаниями в области космоса!' . '<br>';
    echo 'Ваш результат - ' . $sum . ' правильных ответов.';
} elseif ($sum < 5) {
    echo 'Сожалеем, вы обладаете скудными знаниями в области космоса! Но не отчаивайтесь, вы можете восполнить свои пробелы в знаниях и пройти тест повторно.' . '<br>';
    echo 'Ваш результат - ' . $sum . ' правильных ответов.';
}
