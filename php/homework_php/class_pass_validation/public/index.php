<?php

require '../vendor/autoload.php';

use App\PassValidation;

$passValid = new PassValidation();

$passValid->setPass('12dflkdf')->minLimitSymbols();

$passValid->setPass('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliq')->maxLimitSymbols();

$passValid->setPass('12dflkdfH')->topLowerCaseExists();

$passValid->setPass('лоирдловавдовлаовао')->cyrillicSymbolsCheck();

$passValid->setPass('fkdlfkdlfeori')->latinSymbolsCheck();

$passValid->setPass('fkdlf123kdlfeori')->minNumberCount();

$passValid->setPass('1323')->arabicNumericCheck();

$passValid->setPass('1323dlfklkdf')->spaceCheck();

$passValid->setPass("kljfkdjfdk")->otherSymbolsCheck();
