<?php

$arr = [1, 2, 3, 4, 5];
echo json_encode($arr) . "<br>";

$arr1 = ['a' => 1, 2, 3, 4, 5];
echo json_encode($arr1) . "<br>";

$guestBook = [
    [
        'msg' => 'Hello!',
        'name' => 'Vasya',
    ],
    [
        'msg' => 'Hello!',
        'name' => 'Petya',
    ]
];
echo json_encode($guestBook);