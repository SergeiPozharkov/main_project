<?php
$arr = array('green' => 'Зеленый', 'red' => 'Красный', 'blue' => 'Синий', 'purple' => 'Фиолетовый', 'orange' => 'Ораньжевый');
foreach ($arr as $key => $value) {
    echo $key  . ' - ' . $value . '<br>';
}
// Выводит "ключ"- "значение" массива, формата green - Зеленый. 