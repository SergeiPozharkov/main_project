<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="?" method="post">
        <h1>Text filter</h1><br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Write text"></textarea><br><br>
        <input type="submit" value="filter text">
    </form>
</body>

</html>

<?php

$str = $_POST["text"];

$pat = "/дурак/iu";

$pat1 = "/привет/iu";

$rep = "<b>ай-яй-яй</b>";

$strRes = preg_replace($pat, $rep, $str);

$wordsCount = preg_match_all($pat1, $str);

// echo "<div class='result'>";
echo '<br>' . $strRes . '<br>';
echo " Слово 'Привет' встретилось - " . $wordsCount . " раз(а)";
// echo "</div>";

//or var#2

// $pat2 = "Привет";

// $pat3 = "привет";

// $arrStr = preg_split("/ /", $str);

// print_r($arrStr);

// $count = 0;

// foreach ($arrStr as $value) {

//     if ($value == $pat2 || $value == $pat3) {
//         $count += 1;
//     }
// }

// echo " Слово 'Привет' встретилось - " . $count . " раз";

// or var#3

// $pat2 = "Привет";

// echo substr_count($str, $pat2) 

?>