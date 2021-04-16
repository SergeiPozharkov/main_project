<?php

include "A.php";

$a = new A();
echo $a->setHref("https://www.tut.by/")->setInnerText("tut.by")->html();
//$a->setInnerText("tut.by");
//echo $a->html();