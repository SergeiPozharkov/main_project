<?php

$a = function (string $name): void {
    echo "Hello $name <br>";
};
$a("Piter");
$b = $a;
$b("Eugen");