<?php
for ($i = 23; $i <= 78; $i++) {
    if ($i % 2 == 0) {
        echo $i  . ' - четное число' . '<br>';
    } else {
        echo $i  . ' - не четное число' . '<br>';
    }
}
// цикл выводящий числа от 23 до 78 и определяющий четное или не четное число.

// $x = range(23, 78);
// foreach ($x as $value) {
//     echo $value . '<br>';
// }
// выводит числа (массив) от 23 до 78.