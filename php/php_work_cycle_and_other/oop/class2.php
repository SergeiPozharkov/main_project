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

class Shop
{
    Private $name;

    public function naming()
    {
        $this->name = "Puma";
        echo $this->name;
    }
}

$product = new Shop;
$product->naming();
?>
</body>
</html>