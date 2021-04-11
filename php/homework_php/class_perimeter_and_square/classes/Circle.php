<?php

class Circle
{
    public float $a;

    public function __construct($a)
    {
        $this->setA($a);
    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        } else {
            include_once "../include/header.php";
            echo "<div  class='alert alert-danger' id='page-alerts__danger' role='alert'>Радиус не задан или имеет не
            положительное значение!</div>";
            echo "<a href='../forms/circle.html' class='btn btn-secondary'>Вернуться</a>";
            include_once "../include/footer.php";
        }
    }

    public function square()
    {
        return pi() * $this->a ** 2;
    }

    public function perimeter()
    {
        return 2 * pi() * $this->a;
    }
}

$res = new Circle($_POST["a"]);

include_once "../include/header.php";
echo "<div class='alert alert-success' role='alert' id='page-alerts__result'>Результат рассчета = 
{$res->{$_POST["operations"]}()}</div>";
echo "<a href='../forms/circle.html' class='btn btn-primary'>Вернуться</a>";
include_once "../include/footer.php";