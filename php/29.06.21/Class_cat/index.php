<?php


require 'vendor/autoload.php';

use Cat\Cat;
use Cat\Milk;
use Cat\Sausage;


$cat = new Cat();
$cat->eat(new Milk());
$cat->eat(new Sausage());

echo $cat->full();