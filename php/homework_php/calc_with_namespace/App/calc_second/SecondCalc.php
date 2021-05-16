<?php


namespace calc_second;


class SecondCalc
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
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

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /** Метод реализующий вычитание 2-х чисел.
     * @return float
     */
    public function diff(): float
    {
        return $this->a - $this->b;
    }

    /** Метод реализующий деление 2-х чисел.
     * @return float|int
     */
    public function div(): float|int
    {
        return $this->a / $this->b;

    }
}