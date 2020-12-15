<?php
$log = $_POST["log"];
$pass = $_POST["pass"];

if ($log === 'admin' && $pass === '123') {
    echo 'Поздравляем, вы успешно вошли!';
} else {
    echo 'Логин или пароль не верен, поробуйте снова!';
}

