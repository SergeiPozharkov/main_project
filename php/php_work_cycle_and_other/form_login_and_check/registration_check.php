<?php

$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

if (strlen($name) < 2 || strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
} elseif (strlen($login) < 5 || strlen($login) > 50) {
    echo "Недопустимая длина логина";
    exit();
} elseif (strlen($pass) < 5 || strlen($pass) > 32) {
    echo "Недопустимая длина пароля";
    exit();
}

$pass = md5($pass . "skdjsdkjskd143904934"); // хеширование пароля (функция устарела)

$mysqli = new mysqli("127.0.0.1", "root", "root", "register", 3306);

$mysqli->query("INSERT INTO `users` (`name`, `login`, `pass`) VALUES('$name', '$login', '$pass')");

$mysqli->close();

header('Location: index.html');