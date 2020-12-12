<?php
$sum_deposit = 1000;
$percent_peryear = 5;
$month = 24;
for ($i = 1; $i <= $month; $i++) {
    $x = ($percent_peryear / 100) * 30 / 365;
}
$z = $sum_deposit * (1 + $x) ** $month;
echo 'Сумма банковского вклада: ' . $sum_deposit . ' бел.руб' . '<br>';
echo 'Процентная ставка: ' . round($x, 3) . '<br>';
echo 'Итоговая сумма вклада по истечению срока: ' . round($z, 2) . ' бел.руб';
// Сложный процент:
// % = p * d / y
// где
// p — процентная ставка (процентов годовых / 100) по вкладу,
// d — период (количество дней), по итогам которого происходит капитализация (начисляются проценты),
// y — количество дней в календарном году.

//Сложные проценты для банковских вкладов:
// SUM = X * (1 + p*d/y)^n
// где
// SUM — конечная сумма;
// X — начальная сумма;
// p — процентная ставка (процентов годовых / 100) по вкладу,
// d — период (количество дней), по итогам которого происходит капитализация (начисляются проценты),
// y — количество дней в календарном году.
// n — количество периодов, лет (месяцев, кварталов).
