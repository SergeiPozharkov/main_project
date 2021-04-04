<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

/**
 * @var mysqli $link подключение к бд
 * @var array $conf сонфигурационные данные из файла config.php
 */

// Подключение файла с данными по подключению к БД
include_once "connect.php";

// Переменная содержащая результат вызова функции fieldsList, которая возвращает наименования всех полей(кроме id)
$fields = fieldsList($link, $conf["mysql"]["table"]);

/** @var array $conf */
// Запрос к таблице БД на показ всех полей таблицы
$sql = "SELECT * FROM `{$conf['mysql']['table']}`";

/** @var mysqli $link */
// Функция осуществляющая запрос к БД
$result = mysqli_query($link, $sql);

// Вывод открывающегося тега table
echo "<table border='1' class='table table-hover table-dark'>";

// Переменная, содержащая пустую строку
$headers = "";
//Перебор массива содержащего названия полей таблицы БД с последующим помещением в пустую строку и оборачиванием в заглавный тег <th></th>
foreach ($fields as $field) {
    $headers .= "<th>$field</th>";
}
//$headers = "<th>" . implode("</th> <th>", $fields) . "</th>"; // Вариант 2

// Вывод заголовков таблицы
echo "$headers<th>Удалить</th><th>Изменить</th>";

// Цикл осуществляющий генерацию строк и столбцов таблицы
while ($row = mysqli_fetch_assoc($result)) {
    $tableRow = "";
    foreach ($fields as $field) {
        $tableRow .= "<td>$row[$field]</td>";
    }

    echo "<tr>$tableRow.<td><a href='delete.php?id=$row[id]'>❌</a></td><td><a href='showEdit.php?id=$row[id]'>✏</a></td></tr>";
}
echo "</table>";
?>
<a class="btn btn-secondary" href="showAdd.php">Добавить</a>
</body>
</html>