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

    public function Sum(): float
    {
        return $this->a + $this->b;
    }

    public function Difference(): float
    {
        return $this->a - $this->b;
    }

    public function Multiply(): float
    {
        return $this->a * $this->b;
    }

    public function Divide(): float
    {
        return $this->a / $this->b;
    }


}

$calc1 = new Calc(2, 4);

echo $calc1->sum() . "<br>";
echo $calc1->difference() . "<br>";
echo $calc1->multiply() . "<br>";
echo $calc1->divide();
