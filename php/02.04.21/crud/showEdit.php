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

// Подключение файла с данными по подключению к БД
include_once "connect.php";

/** @var array $conf */
// Запрос к таблице БД на показ всех полей таблицы
$sql = "SELECT * FROM `{$conf['mysql']['table']}` WHERE id =$_GET[id]";

/** @var mysqli $link */
// Функция осуществляющая запрос к БД
$result = mysqli_query($link, $sql);

// Функция создающия ассоциотивный массив по результатам запроса к таблице БД
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <?php

                // Переменная содержащая результат вызова функции fieldsList, которая возвращает наименования всех полей(кроме id)
                $fields = fieldsList($link, $conf["mysql"]["table"]);
                // Перебор генерирующий поля формы
                foreach ($fields as $field) {
                    ?>
                    <input type="text" name="<?= $field ?>" value="<?= $row[$field] ?>" class="form-control"><br>
                    <?php
                }
                ?>
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>

</body>
</html>
