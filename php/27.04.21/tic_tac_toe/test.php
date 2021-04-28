<?php

include "autoLoader.php";
include "unitTest.php";

$tictac = new Tictac();

//print_r($tictac
//    ->init(3)
//    ->putCross(1, 1)
//    ->getMap()
//);

test($tictac->init(2)->getMap(),
    [
        ["", ""],
        ["", ""]

    ]
);


test($tictac->init(3)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);

test($tictac->init(3)->putCross(1, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", "X"],
        ["", "", ""]
    ]
);

test($tictac->init(3)->putCross(2, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "X"]
    ]
);
test($tictac->init(3)->putZero(1, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", "O"],
        ["", "", ""]
    ]
);

test($tictac->init(3)->putZero(2, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "O"]
    ]
);