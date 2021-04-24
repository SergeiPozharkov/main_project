<?php

spl_autoload_register(function ($class) {
    include "classes/$class.php";
});

$olMap = new OlMap();
echo "<h1>Нумерованный список сгенирированный с использованием функции array_map</h1>";
echo $olMap
    ->setData1(["Petya", "Vasya", "Kolya"])
    ->arrayMap();

echo "<h1>Нумерованный список сгенирированный с использованием функции array_walk</h1>";

$olWalk = new OlWalk();
echo $olWalk
    ->setData2(["Anton", "Egor", "Vlad"])
    ->arrayWalk();

echo "<h1>Маркированный список сгенирированный с использованием функции array_map</h1>";

$ulMap = new UlMap();
echo $ulMap
    ->setData1(["Katya", "Lena", "Nadya"])
    ->arrayMap();

echo "<h1>Маркированный список сгенирированный с использованием функции array_walk</h1>";

$ulWalk = new UlWalk();
echo $ulWalk
    ->setData2(["Natasha", "Anfisa", "Olya"])
    ->arrayWalk();

echo "<h1>Таблица сгенирированная с использованием функции array_map</h1>";

$tableMap = new TableMap();
echo $tableMap
    ->setData1([1, 2, 3, 4, 5, 6])
    ->arrayMap();

echo "<h1>Таблица сгенирированная с использованием функции array_walk</h1>";

$tableWalk = new TableWalk();
echo $tableWalk
    ->setData2([6, 5, 4, 3, 2, 1])
    ->arrayWalk();