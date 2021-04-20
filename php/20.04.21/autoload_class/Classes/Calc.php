<?php

class Calc
{
    public float $a;
    public float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

}