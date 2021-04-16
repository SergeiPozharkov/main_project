<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="calculation">
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <?php

            include "class/Table.php";
            if (!empty($_POST["tableTop"]) && !empty($_POST["tableLegs"])) {
                $calc = new Table($_POST["tableTop"], $_POST["tableLegs"], $_POST["jobCost"]);

                echo "<div class='alert alert-success' id='calculation__alert' role='alert'>Стоимость =  
                {$calc->{$_POST["converter"]}()} $ (в т.ч. стоимость работы {$_POST['jobCost']} $)</div>";
                echo "<a href='index.html' class='btn btn-primary'>Вернуться</a>";
            } else {
                echo "<div class='alert alert-danger' role='alert' id='calculation__alert'>Заполните все поля!</div>";
                echo "<a href='index.html' class='btn btn-primary'>Вернуться</a>";
            }
            ?>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
</body>
</html>
