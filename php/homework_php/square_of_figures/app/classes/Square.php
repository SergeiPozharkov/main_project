<?php


namespace classes;


class Square implements ISquare
{
    protected float $a;

    /**
     * @param float $a
     * @return Square
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * Метод расчета площади квадрата
     * @return float
     */
    public function figureSquare(): float
    {
        return  $this->a ** 2;
    }
}