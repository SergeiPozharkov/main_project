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
}

$user1 = new User("Vitalik", "123123", "vitalikus228@gmail.com", "Usturupinsk");

var_dump($user1);