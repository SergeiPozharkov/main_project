<?php
$sum_deposit = 1000;
$percent_peryear = 5;
$month = 24;

for ($i = 1; $i <= $month; $i++) {
    $x = ($sum_deposit * $percent_peryear / 100 );
    $x = ($x * ($month * 30) / 365); 
}
$z = $sum_deposit + $x;
echo 'Сумма банковского вклада: ' . $sum_deposit . '<br>';
echo 'Проценты по вкладу: ' . $x . '<br>';
echo 'Итоговая сумма вклада по истечению срока: ' . ceil($z);