<?php


namespace App;


class Rhombus extends Figure
{
    /**
     * Длина стороны а
     * @var float
     */
    protected float $a;
    /**
     * Длина высоты проведенной к стороне a
     * @var float
     */
    protected float $h;

    public function __construct(float $a = 0, float $h = 0)
    {
        $this->setA($a);
        $this->setH($h);
    }

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $h
     * @return $this
     */
    public function setH(float $h): static
    {
        $this->h = $h;
        return $this;
    }

    public function perimeter(): float|int
    {
        return $this->a * 4;
    }

    public function square(): float|int
    {
        return $this->a * $this->h;
    }

}