<?php
$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
foreach ($arr as $key => $value) {
    echo $key  . ' - зарплата ' . $value . ' долларов' . '<br>';
}
// Выводит "ключ"- "значение" массива, формата Коля - зарплата 200 долларов. 