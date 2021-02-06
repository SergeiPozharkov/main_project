<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $data = file_get_contents("war_and_peace.txt");

    $pat = "/\b(судар)(.*?)\b/iu";

    $arr = [];

    $res = preg_match_all($pat, $data, $arr);

    // echo $res;

    // print_r($arr);

    $count = 0;

    $count2 = 0;

    foreach ($arr[0] as $value) {

        if ($value == "сударь") {
            $count += 1;
        } elseif ($value == "сударыня") {
            $count2 += 1;
        }
    }
    echo "Слово <b>сударь</b> встретилось $count раз(а)" . '<br>';

    echo "Слово <b>сударыня</b> встретилось $count2 раз(а)" . '<br>';

    ?>
</body>

</html>