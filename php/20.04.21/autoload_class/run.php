<?php
spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});

$calc = new AbstractCalc(5, 5);
echo $calc->sum();