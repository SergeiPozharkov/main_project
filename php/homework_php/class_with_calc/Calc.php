<?php

/**
 * Class Calc Класс калькулятор для 1 числа.
 */
class Calc
{
    /**
     * @var float переменная, для вычесленийкалькулятора.
     */
    public float $num;

    /**
     * Calc constructor.Конструктор инициализирует переменную $a.
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * Функция для вычисления корня.
     * @return float
     */
    public function sqrt(): float
    {
        return sqrt($this->num);
    }

    /**
     * Функция для вычисления модуля числа.
     * @return float
     */
    public function absolute(): float
    {
        return abs($this->num);
    }

    /**
     * Функция для вычисления синуса.
     * @return float
     */
    public function sinus(): float
    {
        return sin($this->num);
    }


}

