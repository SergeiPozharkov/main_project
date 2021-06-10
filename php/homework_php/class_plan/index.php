<?php

require "vendor/autoload.php";

use classes\Plane;

$plane = new Plane(150, 200, 200000, 5000);

echo $plane->freePlacesCount();
echo "<br>";
echo $plane->rangeFlight();
