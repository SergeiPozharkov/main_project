<?php

// Магические методы
// get и set

class GetSet
{
    private $number = 1;

    public function __get(string $name)
    {
        echo "You get, $name ";
    }

    public function __set(string $name, $value)
    {
        echo "You set, $name to $value";
    }
}

$obj = new GetSet();
echo $obj->number;
echo $obj->number = 7727;
