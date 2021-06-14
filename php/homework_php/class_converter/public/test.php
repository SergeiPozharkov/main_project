<?php

require '../vendor/autoload.php';

use classes\CurrencyConverter;

$converter = new CurrencyConverter(2000);
echo '<h1>Results  currency convertation:</h1>';
echo "Rub = {$converter->ConvertToRub()}" . "<br>";
echo "USD = {$converter->ConvertToUsd()}" . "<br>";
echo "EUR = {$converter->ConvertToEur()}" . "<br>";
echo "Pounds = {$converter->ConvertToGbp()}" . "<br>";
echo "Canadian dollar = {$converter->ConvertToCad()}" . "<br>";
echo "test convert RUB to BYN = {$converter->ConvertToByn($converter->ConvertToRub())}";