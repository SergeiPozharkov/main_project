<?php


namespace App;


class Trapezoid extends Figure
{
    public function __construct(
        protected float $a = 0,
        protected float $b = 0,
        protected float $c = 0,
        protected float $d = 0,
        protected float $h = 0,
    )
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
        $this->setD($d);
        $this->setH($h);
    }

    /**
     * @param float|int $a
     * @return $this
     */
    public function setA(float|int $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float|int $b
     * @return $this
     */
    public function setB(float|int $b): static
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @param float|int $c
     * @return $this
     */
    public function setC(float|int $c): static
    {
        $this->c = $c;
        return $this;
    }

    /**
     * @param float|int $d
     * @return $this
     */
    public function setD(float|int $d): static
    {
        $this->d = $d;
        return $this;
    }

    /**
     * @param float|int $h
     * @return $this
     */
    public function setH(float|int $h): static
    {
        $this->h = $h;
        return $this;
    }

    public function perimeter(): float|int
    {
        return $this->a + $this->b + $this->c + $this->d;
    }

    public function square(): float|int
    {
        return ($this->a + $this->b) * $this->h / 2;
    }
}