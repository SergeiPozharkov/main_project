<?php

class Trapeze
{
    public float $a;
    public float $b;
    public float $c;

    public function __construct($a, $b, $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        } else {
            include_once "../include/header.php";
            echo "<div class='alert alert-danger' id='page-alerts__danger' role='alert'>Верхнее основание не задано или 
            имеет не положительное значение!</div><br>";
            echo "<a href='../forms/cube.html' class='btn btn-secondary'>Вернуться</a>";
            include_once "../include/footer.php";
        }
    }

    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        } else {
            include_once "../include/header.php";
            echo "<div class='alert alert-danger' id='page-alerts__danger' role='alert'>Нижнее основание не задано или 
            имеет не положительное значение!</div><br>";
            echo "<a href='../forms/cube.html' class='btn btn-secondary'>Вернуться</a>";
            include_once "../include/footer.php";
        }
    }

    public function setC($c)
    {
        if ($c > 0) {
            $this->c = $c;
        } else {
            include_once "../include/header.php";
            echo "<div class='alert alert-danger' id='page-alerts__danger' role='alert'>Сторона не задана или имеет не 
            положительное значение!</div><br>";
            echo "<a href='../forms/cube.html' class='btn btn-secondary'>Вернуться</a>";
            include_once "../include/footer.php";
        }
    }

    public function square()
    {
        return ($this->a + $this->b) / 2 * sqrt($this->c ** 2 - ($this->a - $this->b) ** 2 / 4);
    }

    public function perimeter()
    {
        return $this->a + $this->b + $this->c * 2;
    }


}

$res = new Trapeze($_POST["a"], $_POST["b"], $_POST["c"]);
include_once "../include/header.php";
echo "<div class='alert alert-success' role='alert' id='page-alerts__result'>Результат рассчета = 
{$res->{$_POST["operations"]}()}</div><br>";
echo "<a href='../forms/trapeze.html' class='btn btn-primary'>Вернуться</a>";
include_once "../include/footer.php";

