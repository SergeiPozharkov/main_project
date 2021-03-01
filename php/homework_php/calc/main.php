<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <input type="text" name="" id="result" value="<?php if (isset($_POST['equality']) && !empty(file_get_contents("data.txt"))) {
                                                        include "functions.php";
                                                        calculated();
                                                    } elseif (isset($_POST['clear'])) {
                                                        $f = fopen('data.txt', 'w');
                                                        ftruncate($f, 0);
                                                        fclose($f);
                                                    } ?>">

    <form method='post' id="button1">
        <input type="submit" value="=" name="equality" onClick="alert('Рассчитать?')">
    </form>
    <form method='post' id="button2">
        <input type='submit' value="Очистить вывод" id="delete" name='clear' onClick="alert('Очистить?')">
    </form>
    <form action="add.php" method="post">
        <span><input type="submit" value="7" name="seven"><input type="submit" value="8" name="eight"><input type="submit" value="9" name="nine"><input type="submit" value="/" name="divide"></span><br>
        <span><input type="submit" value="4" name="four"><input type="submit" value="5" name="five"><input type="submit" value="6" name="six"><input type="submit" value="*" name="multiply"></span><br>
        <span><input type="submit" value="1" name="one"><input type="submit" value="2" name="two"><input type="submit" value="3" name="three"><input type="submit" value="-" name="minus"></span><br>
        <span><input type="submit" value="0" name="zero"><input type="submit" value="+" name="plus"></span>
    </form>




    <?php
    // if (isset($_POST['clear'])) {
    //     $f = fopen('data.txt', 'w');
    //     ftruncate($f, 0);
    //     fclose($f);
    // }
    ?>
    <?php
    // include "functions.php";
    // if (!empty(file_get_contents("data.txt"))) {
    //     calculated();
    // }
    ?>

</body>

</html>