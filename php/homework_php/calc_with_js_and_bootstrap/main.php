<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="calc.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm" id="center">
            <h1>Calculator</h1>
            <form action="calc.php" method="post">
                <input type="text" id="field" value="" name="field">
                <button type="submit" name="calc" class="btn btn-secondary">Calc</button>
            </form>
            <button onclick="insertNum(1)" class="btn btn-secondary">1</button>
            <button onclick="insertNum(2)" class="btn btn-secondary">2</button>
            <button onclick="insertNum(3)" class="btn btn-secondary">3</button>
            <button onclick="clean()" class="btn btn-secondary">C</button>
            <br>
            <button onclick="insertNum(4)" class="btn btn-secondary">4</button>
            <button onclick="insertNum(5)" class="btn btn-secondary">5</button>
            <button onclick="insertNum(6)" class="btn btn-secondary">6</button>
            <button onclick="insertNum('**')" class="btn btn-secondary">^</button>
            <br>
            <button onclick="insertNum(7)" class="btn btn-secondary">7</button>
            <button onclick="insertNum(8)" class="btn btn-secondary">8</button>
            <button onclick="insertNum(9)" class="btn btn-secondary">9</button>
            <button onclick="insertNum('*')" class="btn btn-secondary">*</button>
            <br>
            <button onclick="insertNum(0)" class="btn btn-secondary">0</button>
            <button onclick="insertNum('+')" class="btn btn-secondary">+</button>
            <button onclick="insertNum('-')" class="btn btn-secondary">-</button>
            <button onclick="insertNum('/')" class="btn btn-secondary">/</button>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>

</body>
</html>