<?php
$n = $_POST['n'];
$calcFactorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $calcFactorial = $calcFactorial * $i;
}
echo $n . '! = ' . $calcFactorial;
//or
// for ($i = 1; $i <= $n; $i++) :
//     $calcFactorial = $calcFactorial * $i;
// endfor;
// echo $n . '! = ' . $calcFactorial;
