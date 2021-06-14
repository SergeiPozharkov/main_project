<?php


namespace classes;


class Router
{
    public function run()
    {
        if (isset($_GET['form'])) {

            if (isset($_POST['byn'])) {
                $converter = new CurrencyConverter($_POST['byn']);
            }

            include "../template/index.html";
        } else {
            include "../template/index.html";
        }
    }
}