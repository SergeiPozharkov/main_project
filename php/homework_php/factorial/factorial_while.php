<?php
$n = $_POST['n'];
$calcFactorial = 1;
$i = 1;

while ($i <= $n) {
    $calcFactorial = $calcFactorial * $i++;
}
echo $n . '! = ' . $calcFactorial;
//or 
// while ($i <= $n) :
//     $calcFactorial = $calcFactorial * $i++;
// endwhile;
// echo $n . '! = ' . $calcFactorial;