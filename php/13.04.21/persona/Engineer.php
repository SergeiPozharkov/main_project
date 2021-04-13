<?php


class Engineer extends Persona
{
    public function say(): string
    {
        return "Я инжинер-программист, меня зовут {$this->name}";
    }

    public function doJob(): string
    {
        return "Я умею программировать";
    }
}