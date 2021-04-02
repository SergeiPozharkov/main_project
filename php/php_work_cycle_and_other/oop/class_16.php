<?php

// Магические методы
//__clone()
class  User
{

    private $id;
    private $name;
    private $city;

    public function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 3306;
    }
}

$user1 = new User("Anatoliy", "Smorgon");
$user1->setId(22345);
$user2 = clone $user1;

var_dump($user1);
echo "<br>";
var_dump($user2);
