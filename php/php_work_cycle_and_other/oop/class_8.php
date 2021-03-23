<?php

class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        $information = "{$this->name} {$this->password} {$this->email} {$this->city} ";

        return $information;
    }

}

$user1 = new User("Vitalik", "123123", "vitalikus228@gmail.com", "Usturupinsk");

//echo $user1->getInfo();
// Ключевое слово extends используется для обозначения наследования (дочернего класса)
class Moderator extends User
{
    public $info;
    public $rights;

    public function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);

        $this->info = $info;
        $this->rights = $rights;

    }

    function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this->info} {$this->rights}";

        return $information;
    }
}

$moder = new Moderator("Kolya", "321", "kolya@gmail.com", "Vileyka", "Moderator",
    "True");

echo $moder->getInfo();