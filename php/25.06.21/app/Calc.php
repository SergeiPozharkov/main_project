<?php


namespace app;


class Calc implements ICalc, ICalculator
{
    protected float $a;
    protected float $b;

    /**
     * @param float $a
     * @return Calc
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return Calc
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    /**
     * @return float
     */
    public function mult(): float
    {
        return $this->a * $this->b;
    }

    public function div(): float
    {
        return $this->a / $this->b;
    }

    public function dif(): float
    {
        return $this->a - $this->b;
    }


}