<?php

function Week($day){
    if ($day == 1) {
        $word = 'Понедельник';
    }
    elseif ($day == 2) {
        $word = 'Вторник';
    }
    elseif ($day == 3) {
        $word = 'Среда';
    }
    elseif ($day == 4) {
        $word = 'Четверг';
    }
    elseif ($day == 5) {
        $word = 'Пятница';
    }
    elseif ($day == 6) {
        $word = 'Суббота';
    }
    elseif ($day == 7) {
        $word = 'Воскресение';
    }
    return $word;
}
$day = 1;
echo 'Введенное число - ' . $day . '<br>' . 'Соответствующий ему день недели - ' . Week($day);

// Функция возвращающая день недели соответствующий введенному числу