<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class ShoppingCard
{

}

$product1 = new ShoppingCard();
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();

var_dump($product1 instanceof ShoppingCard);
var_dump($product2);
var_dump($product3);

?>
</body>
</html>