<?php

interface FirstInterface
{
    public function getName();
}

interface SecondInterface
{
    public function getStatus();
}

//Пример множественного наследования интерфейсов
interface ThirdInterface extends FirstInterface, SecondInterface
{

}

class Test implements ThirdInterface
{
    public $name = "Ivan ";
    public $status = "Admin";

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;

    }
}

$user1 = new Test();
$user1->getName();
$user1->getStatus();
