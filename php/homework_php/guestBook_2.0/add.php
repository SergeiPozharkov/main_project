<?php

include "function.php";

// print_r($_POST);

$data = json_decode(file_get_contents("data.json"));

$data[] = ['msg' => $_POST["msg"], 'name' => $_POST["name"], 'time' => date("d-M-Y (l) H-i-s")];
if (!censure($_POST["msg"])) {
    file_put_contents('data.json', json_encode($data));
    header("location: main.php");
} else {
    echo "Сообщение не отправлено, ваш текст содержит нецензурное выражение <br\n>";
    echo "<a href='main.php'>Переход на главную страницу</a>";
}
