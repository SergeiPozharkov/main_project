<?php

// Подключаем файл с конфигурвцией
include_once "config.php";

// Подключаем файл с функцией, возвращающей все поля таблицы БД крроме id
include_once "functions.php";

/** @var array $conf */
// Функция, осуществляющая подключение к БД
$link = mysqli_connect(
    $conf["mysql"]["host"],
    $conf["mysql"]["user"],
    $conf["mysql"]["password"],
    $conf["mysql"]["db"]
);