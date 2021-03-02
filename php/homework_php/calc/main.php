<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm" id="center">
                <input type="text" name="" id="result" value="<?php include "clickButton.php"; ?>" readonly>
                <form action="add.php" method="post" id="calc">
                    <input type="submit" value="7" name="seven" class="btn btn-secondary"><input type="submit" value="8" name="eight" class="btn btn-secondary"><input type="submit" value="9" name="nine" class="btn btn-secondary"><input type="submit" value="/" name="divide" class="btn btn-secondary"><br>
                    <input type="submit" value="4" name="four" class="btn btn-secondary"><input type="submit" value="5" name="five" class="btn btn-secondary"><input type="submit" value="6" name="six" class="btn btn-secondary"><input type="submit" value="*" name="multiply" class="btn btn-secondary"><br>
                    <input type="submit" value="1" name="one" class="btn btn-secondary"><input type="submit" value="2" name="two" class="btn btn-secondary"><input type="submit" value="3" name="three" class="btn btn-secondary"><input type="submit" value="-" name="minus" class="btn btn-secondary"><br>
                    <input type="submit" value="0" name="zero" class="btn btn-secondary"><input type="submit" value="+" name="plus" class="btn btn-secondary">
                </form>
                <form method='post' id="button1">
                    <input type="submit" value="=" name="equality" class="btn btn-secondary" id="operation_start" onClick="alert('Рассчитать?')">
                </form>

                <form method='post' id="button2">
                    <input type='submit' value="Очистить вывод" class="btn btn-secondary" id="delete" name='clear' onClick="alert('Очистить?')">
                </form>

            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
</body>

</html>