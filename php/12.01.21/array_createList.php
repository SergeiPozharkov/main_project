<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function array_tolist($list)
    {
        echo "<ul>\n";
        foreach ($list as $value) {
            echo "\t<li>$value</li>\n";
        }
        echo "<ul>\n";
    }

    $list = ['Вася', 'Петя', 'Коля'];

    echo array_tolist($list);
    ?>
</body>

</html>