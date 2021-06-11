<?php


namespace src;


class Router
{
    public function run()
    {
        if (isset($_POST['sum'])) {
            echo (new Calc())->setA($_POST['a'])->setB($_POST['b'])->sum();
        } else {
            require "../../template/index.html";
        }
    }
}