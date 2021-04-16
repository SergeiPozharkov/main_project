<?php

include "Pre.php";

$pre = new Pre();
echo $pre->setInnerText("tex    t    text\n text")->html();
