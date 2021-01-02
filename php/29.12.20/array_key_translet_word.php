<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $i = $_POST["num"];

    $num = [
        'ноль' => 'zero',
        'один' => 'one',
        'два' => 'two',
        'три' => 'three',
        'четыре' => 'four',
        'пять' => 'five',
        'шесть' => 'six',
        'семь' => 'seven',
        'восемь' => 'eight',
        'девять' => 'nine'
    ];
    
    if (isset($num[$i])) {
        echo $num[$i];
    } else {
        echo 'Сожалеем, такого слова в переводчике нет, попробуйте другое слово!';
    }
    ?>
</body>

</html>