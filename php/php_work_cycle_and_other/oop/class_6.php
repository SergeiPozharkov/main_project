<?php

class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    public function getName()
    {
        echo $this->name;
        $this->Test();
    }

    public function Test()
    {
        echo "Test";
    }
}

$user1 = new User();
$user1->name = "Boris";
$user1->getName();

$user2 = new User();
$user2->name = "Vasya";
$user2->getName();
