<?php
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];

if ($q1 == 4 && $q2 == 'Лондон' ) {
    echo 'Поздравляем, вы сдали зачет!';
} else {
    echo 'Сожалеем, вы не сдали зачет, приходите на пересдачу!';
}