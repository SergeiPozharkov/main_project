<?php

include_once "connect.php"; // Подключение файла с данными по подключению к БД

/**
 * @var mysqli $link подключение к бд
 * @var array $conf сонфигурационные данные из файла config.php
 */

if (!empty($_POST)) {
    // Переменная содержащая результат вызова функции fieldsList, которая возвращает наименования всех полей(кроме id)
    $fields = fieldsList($link, $conf["mysql"]["table"]);
    // Переменная содержащая универсальный запрос к таблице БД на добавление значений в соответствующие поля таблицы
    $sql = "INSERT INTO `{$conf['mysql']['table']}`(" . implode(", ", $fields) . ") VALUES 
    (" . "'" . implode("', '", $_POST) . "'" . ")";
    // Функция осуществляющая запрос к БД
    mysqli_query($link, $sql);
}
// Редирект на страницу show.php
header("Location: show.php");
