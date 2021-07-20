<?php


namespace App;


class Rectangle extends Figure
{
    public function __construct(
        protected float $a = 0,
        protected float $b = 0
    )
    {
        $this->setA($a);
        $this->setB($b);
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
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    public function square(): float|int
    {
        return $this->a * $this->b;
    }

    public function perimeter(): float|int
    {
        return ($this->a + $this->b) * 2;
    }
}