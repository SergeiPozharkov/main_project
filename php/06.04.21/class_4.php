<?php

class Square
{
    public float $side;

    public function __construct()
    {
        $this->side = 10;
    }
}

$square1 = new Square();

echo $square1->side;