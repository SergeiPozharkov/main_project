<?php


namespace calc_first;


class FirstCalc
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
     * @return FirstCalc
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
    
    /** Метод реализующий сложение 2-х чисел.
     * @return float
     */
    public function sum(): float
    {
        return $this->a + $this->b;
    }

    /** Метод реализующий умножение 2-х чисел.
     * @return float|int
     */
    public function mult(): float|int
    {
        return $this->a * $this->b;

    }

}