<?php

class User
{
    public $name;
    public $login;
    public $pass;

    public static $counter = 0;

    public function __construct($name, $login, $pass)
    {
        $this->name = $name;
        $this->login = $login;
        $this->pass = $pass;
        ++self::$counter;
    }
}

$user1 = new User("Anatoliy", "Tola123", "123");

$user2 = new User("Arnold", "Schvarts228", "terminator229");

$user3 = new User("Big Boss", "bolshoynasalnika777", "777");

echo "Vsego polzovateley: " . User::$counter;