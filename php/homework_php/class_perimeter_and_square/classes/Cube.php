<?php

class Cube
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
            echo "<div class='alert alert-danger' id='page-alerts__danger' role='alert'>Сторона не задана или имеет не 
            положительное значение!</div>";
            echo "<a href='../forms/cube.html' class='btn btn-secondary'>Вернуться</a>";
            include_once "../include/footer.php";
        }
    }

    public function square()
    {
        return ($this->a ** 2) * 6;
    }

    public function perimeter()
    {
        return $this->a * 12;
    }
}

$res = new Cube($_POST["a"]);

include_once "../include/header.php";
echo "<div class='alert alert-success' role='alert' id='page-alerts__result'>Результат рассчета = 
{$res->{$_POST["operations"]}()}</div>";
echo "<a href='../forms/cube.html' class='btn btn-primary'>Вернуться</a>";
include_once "../include/footer.php";