<?php
$a = array(1, 2, 3, 4, 5);
$result = 0;

foreach ($a as $value) {
  if ($value <= 5) {
      $result += ($value * $value);
  }
}
echo $result;
// Возводит в квадрат каждый элемент массива, складывает их и выводит сумму.