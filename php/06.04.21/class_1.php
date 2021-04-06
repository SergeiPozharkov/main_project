<?php

declare(strict_types=1);

class Person
{
    private float $age;
    private string $name;

    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function intro()
    {
        return "Меня зовут $this->name, мне $this->age лет.";
    }
}

$person1 = new Person(2.5, "Anton");

//echo "$person1->name $person1->age";

echo $person1->intro();

