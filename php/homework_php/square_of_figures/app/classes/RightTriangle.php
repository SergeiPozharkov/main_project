<?php


namespace classes;


class RightTriangle implements ISquare
{
    protected float $a;
    protected float $b;

    /**
     * @param float $a
     * @return RightTriangle
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return RightTriangle
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    /**
     * Метод расчета площади прямоугольного треугольника
     * @return float
     */
    public function figureSquare(): float
    {
        return $this->a * $this->b / 2;
    }


}