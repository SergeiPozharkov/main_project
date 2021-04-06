<?php

class Dot
{
    public float $x;
    public float $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$dot1 = new Dot(2, 2);

echo $dot1->x;
echo $dot1->y;