<?php

class User
{
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Эмэйл";
    public $city = "Город";

    public function Hello()
    {
        echo "Hello {$this->name}";
    }

    //or
    function getInfo()
    {
        return "{$this->name} {$this->surname}";
    }
}


$admin = new User();
$admin->name = "Inokentiy";
$admin->surname = "ITschkovisch";
$admin->Hello();
echo "Пользователь: {$admin->getInfo()}";

