<?php

//Трейты

class Base
{
    public function sayHello()
    {
        echo "Hello";
    }
}

trait sayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "World";
    }
}

class myHelloWorld extends Base
{
    use sayWorld;
}

$obj = new myHelloWorld();
$obj->sayHello();