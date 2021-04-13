<?php


abstract class Persona
{
    protected string $name;
    protected int $age;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) > 1) {
            $this->name = $name;
        }
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if (strlen($age) > 0) {
            $this->age = $age;
        }
    }

    abstract public function say(): string;

    abstract public function doJob(): string;
}
