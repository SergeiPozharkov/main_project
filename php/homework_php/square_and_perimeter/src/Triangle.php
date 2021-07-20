<?php


namespace App;


class Triangle extends Figure
{

    public function __construct(
        protected float $a = 0,
        protected float $b = 0,
        protected float $c = 0,
        protected float $h = 0
    )
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
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
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @param float $c
     * @return $this
     */
    public function setC(float $c): static
    {
        $this->c = $c;
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
        return $this->a + $this->b + $this->c;
    }

    public function square(): float|int
    {
        return ($this->a * $this->h) / 2;
    }
}