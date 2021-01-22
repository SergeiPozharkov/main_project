<?php

$text = "Каждый охотник желает знать, где сидит фазан";

$newText = wordwrap($text, 15, "<br>\n", 1);

echo "$newText\n";
