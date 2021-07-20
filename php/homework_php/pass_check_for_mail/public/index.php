<?php

require "../vendor/autoload.php";

$passCheck = new \App\PassCheck();

$passCheck->setPass("etao123")->searchAndReplaceCharacter();

$passCheck->setPass("family")->keyboardSequence();
