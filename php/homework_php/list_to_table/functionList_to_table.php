<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<table border='1'><th colspan = 3>Зарплатная смета:</th>";

    function array_totable($list, $table)
    {
        foreach ($list as $value) {
            $table .= "<tr>";
            foreach ($value as $strList) {
                $table .= "<td width = '50' height = '30'>$strList</td>";
            }
            $table .= "</tr>";
        }
        return $table;
    }

    $list = [
        [1, "Иванов", 500],
        [2, "Петров", 600],
        [3, "Сидоров", 700],
        [4, "Марковский", 800],
        [5, "Огуречный", 900],
        [6, "Помидоров", 1000]
    ];

    echo array_totable($list, $table);

    echo "</table>";
    ?>
</body>

</html>