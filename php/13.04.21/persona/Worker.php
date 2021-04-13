<?php


class Worker extends Persona
{
    public function say(): string
    {
        return "Я рабочий, меня зовут {$this->name}";
    }

    public function doJob(): string
    {
        return "Я умею копать";
    }
}