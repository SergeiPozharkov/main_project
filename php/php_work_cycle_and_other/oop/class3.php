<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class User
{
    public $name = "Имя";
    public $password = "Пароль";
    public $emeil = "Эмэйл";
    public $city = "Город";
}

$admin = new User();
$user1 = new User();

$admin->name = "Anton";
$user1->name = "Kolya";

echo $admin->name;
echo $user1->name;
?>
</body>
</html>