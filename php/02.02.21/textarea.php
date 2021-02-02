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
<form action="?" method="post">
    <textarea name="text" id="" cols="30" rows="10"><b>Привет</b> <b>Андрей</b> <b>Как</b> <b>Твои</b> <b>Дела</b></textarea>
    <input type="submit" value="ok">
</form>
</body>
</html>
<?php
$str = $_POST["text"];
//$str = "Всем <b>Привет</b> <b>Андрей</b> <b>Как</b> <b>Твои</b> <b>Дела</b> !!!";

$pat = "/<b>(.*?)<\/b>/i";

$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);

echo $str2;
?>