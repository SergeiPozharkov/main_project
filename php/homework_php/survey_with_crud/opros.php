<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="main">
<h1 class="display-1">Опрос общего характера</h1>

<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form class="opros" action="crud/add.php" method="post">
                <div class="opros__city">
                    <label class="col-form-label">Из какого вы города? </label><input type="text" name="city"
                                                                                      class="form-control">
                </div>
                <br>
                <div class="opros__email">
                    <label class="col-form-label">Ваш email: </label><input type="text" name="email"
                                                                            class="form-control">
                </div>
                <br>
                <div class="opros__gender" class="input-group mb-3">
                    <label class="col-form-label">Ваш пол: </label><select name="gender" id="inputGroupSelect01"
                                                                           class="form-select">
                        <option hidden=""></option>
                        <option value="Мужчина">Мужчина</option>
                        <option value="Женщина">Женщина</option>
                    </select>
                </div>
                <br>
                <div class="opros__age">
                    <label class="col-form-label">Ваш возраст: </label><input type="number" name="age"
                                                                              class="form-control"
                                                                              id="example-number-input">
                </div>
                <br>
                <input type="submit" class="btn btn-secondary" value="Завершить опрос">
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>

