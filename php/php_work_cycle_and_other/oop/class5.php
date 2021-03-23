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
        return "{$this->name} {$this->password} {$this->email} {$this->city}";
    }
}

$user1 = new User("Vitalik", "123123", "vitalikus228@gmail.com", "Usturupinsk");

echo $user1->getInfo();

class  DestructClass
{
    function __construct()
    {
        print "Конструктор";
        $this->name = "DestructClass";
    }

    function __destruct()
    {
        print "Уничтожение" . $this->name;
    }
}

$object = new DestructClass();