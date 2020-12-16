<?php
$byn = $_POST["byn"];

echo $byn . ' бел.руб' . '<br>';
echo 'В доллары: ' . round($byn / 2.53, 2) . '<br>';
echo 'В евро: ' . round($byn / 3.07, 2) . '<br>';
echo 'В рубли: ' . round($byn / 0.034, 2);
