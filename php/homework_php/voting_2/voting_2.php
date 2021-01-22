<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $answer = $_POST["answer"];

    $strData = file_get_contents("data.txt");

    $data = explode("\n", $strData);

    $data[$answer] += 1;

    $saveData = implode("\n", $data);

    $sumData = $data[0] + $data[1] + $data[2];

    file_put_contents("data.txt", $saveData);

    echo "<div>";

    echo "<h1>Спасибо за ответ!<h1>" .  "<br>";

    echo 'Сумма ответов = ' . $sumData . "<br>";

    echo 'от 18 до 25 ' . round(($data[0] / $sumData) * 100, 2) . '%' . "<br>";

    echo 'от 25 до 30 ' . round(($data[1] / $sumData) * 100, 2) . '%' . "<br>";

    echo 'от 30 до 45 ' . round(($data[2] / $sumData) * 100, 2) . '%';

    echo "</div>";

    ?>
</body>

</html>