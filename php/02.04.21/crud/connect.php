<?php
// Подключаем файл с конфигурвцией

include_once "config.php";

include_once "functions.php";

/** @var array $conf */
$link = mysqli_connect(
    $conf["mysql"]["host"],
    $conf["mysql"]["user"],
    $conf["mysql"]["password"],
    $conf["mysql"]["db"]
);