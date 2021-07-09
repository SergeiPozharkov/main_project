<?php

require '../vendor/autoload.php';

use App\CalcForStrings;

$calc = new CalcForStrings();

echo $calc->setStr("dkfjd")->strStrlen() . '<br>';
echo $calc->setStr("dkfjdkfjdfkjdf1234dfjdfk123")->numericCount() . '<br>';
echo $calc->setStr("dkl,.fkdfl.-,k12132,.-")->symbolsCount() . '<br>';
echo $calc->setStr("dkAl,.fDSPfl.")->upperCaseCount() . '<br>';
echo $calc->setStr("dkl,.fkd-")->lowerCaseCount();