<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sec = mktime(0, 0, 0, 7, 23, 2021) - time();
    $days = floor($sec / (60 * 60 * 24));
    $hours = floor($sec % (60 * 60 * 24) / (60 * 60));
    $minute = floor($sec % (60 * 60) / (60));
    $second =  $sec % 60;
    echo "Осталось - $days дней $hours часов $minute минут $second секунд";
    ?>
</body>

</html>