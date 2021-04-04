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
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="add.php" method="post">
                <?php

                // Подключение файла с данными по подключению к БД
                include_once "connect.php";
                /**
                 * @var mysqli $link подключение к бд
                 * @var array $conf сонфигурационные данные из файла config.php
                 */

                // Переменная содержащая результат вызова функции fieldsList, которая возвращает наименования всех полей(кроме id)
                $fields = fieldsList($link, $conf["mysql"]["table"]);
                // Перебор генерирующий поля формы
                foreach ($fields as $field) {
                    ?>
                    <div class="input-group mb-3">
                        <input type="text" name="<?= $field ?>" class="form-control" placeholder="<?= $field ?>">
                    </div>

                    <?php

                }

                ?>
                <input class="btn btn-secondary" type="submit" value="Добавить">
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>

</body>
</html>

