<?php


namespace App;


class Square extends Figure
{
    protected float $a;

    public function __construct(float $a = 0)
    {
        $this->setA($a);
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

    public function square(): float|int
    {
        return $this->a ** 2;
    }

    public function perimeter(): float|int
    {
        return $this->a * 4;
    }
}