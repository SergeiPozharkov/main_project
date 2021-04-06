<?php


class Line
{
    public float $x1;
    public float $y1;
    public float $x2;
    public float $y2;

    public function __construct($x1, $y1, $x2, $y2)
    {
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }

}

$line1 = new Line(5, 3.5, 10, 2);

echo $line1->x1;
echo $line1->y1;
echo $line1->x2;
echo $line1->y2;