<?php

include_once "connect.php"; // Подключение файла с данными по подключению к БД
/** @var array $conf */

// Универсальный запрос к таблице БД на удаление конкретной строки по id
$sql = "DELETE FROM {$conf['mysql']['table']} WHERE id = $_GET[id]";

/** @var false|mysqli $link */
// Функция осуществляющая запрос к БД
mysqli_query($link, $sql);

// Редирект на страницу show.php
header("Location: show.php");
