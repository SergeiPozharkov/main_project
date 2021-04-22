<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

spl_autoload_register(function ($class) {
    include "classes/$class.php";
});

$img = new Img();
echo $img
    ->setSrc("images/img.jpg")
    ->setStyle("border: 5px solid black; width:400px; height:300px;")
    ->setClass("rounded mx-auto d-block")
    ->html();
echo "<br>";

$embed = new Embed();
echo $embed
    ->setSrc("videos/Video.mp4")
    ->setStyle(" width:500px; height:300px;")
    ->html();

echo "<br>";

$input = new Input();
echo $input
    ->setType("text")
//    ->setValue("test")
    ->setStyle("width:300px")
    ->setClass("class")
    ->html();

echo "<br>";

$h1 = new H1();
echo $h1
    ->setTagName("h1")
    ->setStyle("color: red")
    ->setClass("class")
    ->setText("test text!")
    ->html();

echo "<br>";

$button = new Button();
echo $button
    ->setTagName("button")
    ->setType("text")
    ->setValue("text")
    ->setName("btn")
    ->setText("button")
    ->setStyle("color: blue")
    ->setClass("btn btn-primary")
    ->html();

echo "<br><br>";

$a = new A();
echo $a
    ->setTagName("a")
    ->setName("link")
    ->setStyle("color: red")
    ->setClass("btn btn-primary")
    ->setHref("test.php")
    ->setText("Ссылка")
    ->html();
?>
</body>
</html>