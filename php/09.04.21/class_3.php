<?php

class Triangle
{
    public float $a;
    public float $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        } else {
            echo "Error,variable not valid!";
        }
    }

    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        } else {
            echo "Error,variable not valid!";
        }
    }

    public function hypotinuse(): float
    {
        return sqrt(pow($this->a, 2) + pow($this->b, 2));
    }
}

class Triangle2 extends Triangle
{
    public function square()
    {
        return ($this->a * $this->b) / 2;
    }

    public function perimeter()
    {
        return $this->a + $this->b + $this->hypotinuse();
    }
}

$res = new Triangle2(3, 7);

echo "Гипотинуза = {$res->hypotinuse()}<br>";
$res->setA(5);
$res->setB(10);
echo "Гипотинуза = {$res->hypotinuse()}<br>";

echo "Площадь = {$res->square()}<br>";
echo "Периметор = {$res->perimeter()}";

