<?php

class Person
{
    public string $name;
    public int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function say()
    {
        return "Меня зовут {$this->name}, мне {$this->age} лет. ";
    }
}

class Worker extends Person
{
    public function work()
    {
        return "Я умею ложить кирпичи!";
    }
}

class Student extends Person
{
    public function work()
    {
        return "Я умею учиться без 'хвостов'!";
    }
}

$worker1 = new Worker("Anton ", 45);
echo $worker1->name;
echo $worker1->age;
echo "<br>";
echo $worker1->say();
echo $worker1->work();
echo "<br>";
$boy1 = new Student("Lyova", 19);
echo $boy1->say();
echo $boy1->work();

