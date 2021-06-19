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

require "../vendor/autoload.php";

use classes\Weather;

$html = file_get_contents("https://yandex.by/pogoda/{$_POST['city']}?utm_campaign=informer&utm_content=main_informer&utm_medium=web&utm_source=home&utm_term=main_number");

preg_match("/<h1 class=\"title title_level_1 header-title__title\" id=\"main_title\">(.*?)<\/h1>/ui", $html,
    $math);

preg_match_all("/<div class=\"temp\" role=\"text\"><span class=\"temp__value temp__value_with-unit\">(.*?)<\/span>/uim", $html, $matches);

?>
<form action="?" method="post">

    <select name="city">
        <option value="minsk">Минск</option>
        <option value="vitebsk">Витебск</option>
        <option value="gomel">Гомель</option>
        <option value="grodno">Гродно</option>
        <option value="mogilev">Могилев</option>
        <option value="brest">Брест</option>
    </select>

    <?php if (isset($_POST['city'])): ?>

        <?php $weather = new Weather(); ?>

        <?= $weather->setTemperature($matches[1][2])->setCityName($math[1])->weatherShow() ?>

    <?php endif; ?>

    <input type="submit" value="ok">
</form>
</body>
</html>
