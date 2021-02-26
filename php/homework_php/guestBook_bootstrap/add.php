<?php

include "functions.php";

// print_r($_POST);

$data = json_decode(file_get_contents("data.json"));

$data[] = ['msg' => $_POST["msg"], 'name' => $_POST["name"], 'time' => time()];

if (!censure($_POST["msg"]) && !empty($_POST["msg"]) && !empty($_POST["name"])) {
    file_put_contents('data.json', json_encode($data));
    header("location: main.php");
} elseif(censure($_POST["msg"])) {
    echo "Сообщение не отправлено, ваш текст содержит нецензурное выражение <br>";
    echo "<a href='main.php'>Переход на главную страницу</a>";
}elseif (empty($_POST["msg"]) || empty($_POST["name"])) {
    echo "Заполните все текстовые поля !<br>";
    echo "<a href='main.php'>Переход на главную страницу</a>";
}

