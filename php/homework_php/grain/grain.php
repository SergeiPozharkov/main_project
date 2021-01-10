<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<table border='1'>";

    $width  = $_POST['width'];
    $height = $_POST['height'];
    $tona = 1000000;

    function Grains($width, $height)
    {
        $grainsSum = 0;

        for ($i = 0; $i < $width * $height; $i++) {
            $grainsSum += pow(2, $i);
        }
        return $grainsSum;
    }

    echo Grains($width, $height) . ' - Сумма зерен' . '<br>';

    echo 'Суммарная масса зерен (в тоннах) - ' . Grains($width, $height) / $tona . ' тонн';

    for ($i = 1; $i <= $width; $i++) {
        $table .= '<tr>';
        for ($x = 1; $x <= $height; $x++) {
            $color = ($i + $x) % 2 ? 'white' : 'brown';
            $table .= "<td bgcolor=$color width='50' height='50'></td>";
        }
        $table .= '</tr>';
    }
    echo $table;

    echo "</table>";
    ?>
</body>

</html>