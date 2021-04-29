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
            One of three columns
        </div>
        <div class="col-sm">
            <?php

            include "autoLoader.php";
            include "unitTest.php";

            $tictac = new Tictac();

            //print_r
            ($tictac
                ->init(3)
                ->putCross(1, 2)
                ->putZero(1, 1)
                ->getMap()
            );

            $map = new Map();
            echo $map
                ->setMap($tictac->getMap())
                ->getHtmlTable();

            //test($tictac->init(2)->getMap(),
            //    [
            //        ["", ""],
            //        ["", ""]
            //
            //    ]
            //);
            //
            //
            //test($tictac->init(3)->getMap(),
            //    [
            //        ["", "", ""],
            //        ["", "", ""],
            //        ["", "", ""]
            //    ]
            //);
            //
            //test($tictac->init(3)->putCross(1, 2)->getMap(),
            //    [
            //        ["", "", ""],
            //        ["", "", "X"],
            //        ["", "", ""]
            //    ]
            //);
            //
            //test($tictac->init(3)->putCross(2, 2)->getMap(),
            //    [
            //        ["", "", ""],
            //        ["", "", ""],
            //        ["", "", "X"]
            //    ]
            //);
            //test($tictac->init(3)->putZero(1, 2)->getMap(),
            //    [
            //        ["", "", ""],
            //        ["", "", "O"],
            //        ["", "", ""]
            //    ]
            //);
            //
            //test($tictac->init(3)->putZero(2, 2)->getMap(),
            //    [
            //        ["", "", ""],
            //        ["", "", ""],
            //        ["", "", "O"]
            //    ]
            //);
            ?>
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>
</body>
</html>
