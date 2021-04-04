<?php

include_once "connect.php"; // Подключение файла с данными по подключению к БД

/**
 * @var mysqli $link подключение к бд
 * @var array $conf сонфигурационные данные из файла config.php
 */

// Переменная содержащая пустой массив
$str = [];
// Перебор данных формы showEdit.php и добавление всех данных полей кроме id  в массив $str
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}

// Универсальный запрос к БД на изменение существующий полей таблицы по id
$sql = "UPDATE `{$conf['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";

/** @var false|mysqli $link */
// Функция осуществляющая запрос к БД
mysqli_query($link, $sql);

// Редирект на страницу show.php
header("Location: show.php");