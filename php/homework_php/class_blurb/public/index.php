<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Генерация рекламного объявления для продажи машины</h1>
<form action="script.php" method="post">
    <span>Марка автомобиля </span><br><input type="text" name="name"><br><br>
    <span>Цвет автомобиля </span><br><input type="text" name="color"><br><br>
    <span>Цена автомобиля </span><br><input type="text" name="price"><br><br>
    <span>Максимальная скорость автомобиля </span><br><input type="text" name="max_speed"><br><br>
    <span>Мощность двигателя автомобиля </span><br><input type="text" name="engine_volume"><br><br>
    <span>Расход топлива автомобиля </span><br><input type="text" name="fuel_consumption"><br><br>
    <input type="submit" class="btn btn-primary" value="Сгенерировать">
</form>
</body>
</html>
