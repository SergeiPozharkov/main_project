<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="?" method="post">
        <h1>Text filter</h1><br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Write text"></textarea><br><br>
        <input type="submit" value="filter text">
    </form>
    <br>
    <?php
    if (!empty($_POST["text"])) {
        include "script.php";
        echo $strRes . '<br>';
        echo " Слово 'Привет' встретилось - " . $wordsCount . " раз(а)";
    }
    ?>
</body>

</html>