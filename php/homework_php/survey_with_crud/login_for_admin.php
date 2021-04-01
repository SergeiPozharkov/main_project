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
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <h1>Форма авторизации</h1>
            <form action="login_check.php" method="post">
                <input type="text" placeholder="Введите свой логин" name="login" id="login" class="form-control"><br>
                <input type="password" placeholder="Введите свой пароль" name="pass" id="pass" class="form-control"><br>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>

