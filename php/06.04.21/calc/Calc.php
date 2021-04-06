<?php

/**
 * Class Calc Класс калькулятор.
 */
class Calc
{
    /**
     * @var float переменная, для вычесленийкалькулятора.
     */
    public float $a;
    /**
     * @var float переменная, для вычесленийкалькулятора.
     */
    public float $b;

    /**
     * Calc constructor.Конструктор инициализирует переменные $a и $b.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

    }

    /**
     * Функция для сложения чисел.
     * @return float
     */
    public function sum(): float
    {
        return $this->a + $this->b;
    }

    /**
     * Функция для разности чисел.
     * @return float
     */
    public function difference(): float
    {
        return $this->a - $this->b;
    }

    /**
     * Функция для произведения чисел.
     * @return float
     */
    public function multiply(): float
    {
        return $this->a * $this->b;
    }

    /**
     * Функция для деления чисел.
     * @return float
     */
    public function divide(): float
    {
        return $this->a / $this->b;
    }


}

//$calc1 = new Calc(2, 4);

//echo $calc1->Sum() . "<br>";
//echo $calc1->Difference() . "<br>";
//echo $calc1->Multiply() . "<br>";
//echo $calc1->Divide();
