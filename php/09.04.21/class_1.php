<?php

class Calc2
{
    public float $a;
    public float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function difference()
    {
        return $this->a - $this->b;
    }
}

class Div extends Calc2
{
    public function division()
    {
        return $this->a / $this->b;
    }
}

class Mult extends Calc2
{
    public function umn()
    {
        return $this->a * $this->b;
    }
}

$calc = new Calc2(10, 2);
echo $calc->difference();
echo "<br>";
$calc2 = new Div(10, 2);
echo $calc2->division();
echo "<br>";
$calc3 = new Mult(5, 2);
echo $calc3->umn();