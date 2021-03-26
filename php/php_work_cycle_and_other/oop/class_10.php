<?php

class user
{
    public static $name;

    public static function hello()
    {
        echo "Hello " . self::$name . " ";
    }
}

user::$name = "Vitalik <br>";

echo user::$name;
user::hello();