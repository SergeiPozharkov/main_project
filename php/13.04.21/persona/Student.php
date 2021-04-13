<?php


class Student extends Persona
{
    public function say(): string
    {
        return "Я студент, меня зовут {$this->name}";
    }

    public function doJob(): string
    {
        return "Я умею учиться";
    }
}