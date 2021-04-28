<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <style>
        body {
            text-align: center;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
<form action="?" method="post">
    <?php

    ini_set("error_reporting", "0");
    for ($i = 1; $i <= 9; $i++) {
        echo "<button type='submit' value='$i' name='click' style='width: 50px; height: 50px; margin-bottom: 5px'>";
        if ($_POST["click"] == $i) {
            echo 'X';
        }
        echo "</button>";
    }
    ?>
    <!--    <div>-->
    <!--        <button type="submit" value="1" name="click"-->
    <!--                style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="2" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="3" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--    </div>-->
    <!--    <div>-->
    <!--        <button type="submit" value="4" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="5" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="6" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--    </div>-->
    <!--    <div>-->
    <!--        <button type="submit" value="7" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="8" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--        <button type="submit" value="9" name="click" style="width: 50px; height: 50px; margin-bottom: 5px"></button>-->
    <!--    </div>-->
</form>
</body>
</html>