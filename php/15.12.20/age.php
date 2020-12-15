<?php
$age = $_POST["age"];
if ($age <= 17) {
    echo 'Вы юноша!';
} elseif ($age >= 18 && $age <= 49) {
    echo 'Вы мужчина!';
} elseif ($age > 49) {
    echo 'Вы пожилой человек!';
}
