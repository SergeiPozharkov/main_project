<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $date = explode("-", $_POST["date"]);
    $year = $date[0];
    $month = $date[1];
    $day = $date[2];
    $second = time() - mktime(0, 0, 0, $month, $day, $year);
    $days = floor($second  / (60 * 60 * 24));
    echo "$days - прожито дней";

    ?>
    <h1>Определение возроста</h1>
    <form action="?" method="post">
        <span>Выберите день</span><input type="date" name="date" id="">
        <input type="submit" value="Определить возрост">
    </form>
</body>

</html>