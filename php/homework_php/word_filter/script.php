<?php

$str = $_POST["text"];

$pat = "/дурак/iu";

$pat1 = "/привет/iu";

$rep = "<b>ай-яй-яй</b>";

$strRes = preg_replace($pat, $rep, $str);

$wordsCount = preg_match_all($pat1, $str);

echo $strRes . '<br>';
echo " Слово 'Привет' встретилось - " . $wordsCount . " раз(а)";

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

// echo substr_count($str, $pat2);