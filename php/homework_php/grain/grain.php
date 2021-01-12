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
    $weight = $_POST['weight'];
    $tona = 1000000;

    function grainsSum($width, $height)
    {

        $grainsSum = 0;

        for ($i = 0; $i < $width * $height; $i++) {
            $grainsSum += 2 ** $i;
        }
        return $grainsSum;
    }

    echo grainsSum($width, $height) . ' - Сумма зерен' . '<br>';

    echo 'Суммарная масса зерен (в тоннах) - ' . grainsSum($width, $height) *  $weight / $tona . ' тонн';

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