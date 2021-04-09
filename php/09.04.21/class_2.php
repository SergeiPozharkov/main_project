<?php

class Rectangle
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }

    public function square()
    {
        return $this->a * $this->b;
    }
}

class Perimeter extends Rectangle
{
    public function perim()
    {
        return ($this->a + $this->b) * 2;
    }
}

//$rec = new Rectangle(9, 2);
//
//echo "Площадь = {$rec->square()}";
//
//echo "<br>";

$per = new Perimeter(2, 6);

echo "Периметор = {$per->perim()}";
echo "<br>";
$per->setA(10);
$per->setB(6);
echo "Периметор = {$per->perim()}";