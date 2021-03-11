<?php

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

$pass = md5($pass . "skdjsdkjskd143904934"); // хеширование пароля (функция устарела)

$mysqli = new mysqli("127.0.0.1", "root", "root", "register", 3306);

$login = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $login->fetch_assoc();

$count = 0;

if (empty($user)) {
    $count++;
    echo "Пользователь не найден";
    if ($count > 5) {
        echo "Вы привысили количество попыток авторизации";
    }
    exit();
}

setcookie('user', $user['id'], time() + 60 * 60 * 24 * 365, "/"); // 0x7FFFFFFF - кука на всю жизнь XD


$mysqli->close();

header('Location: index.html');