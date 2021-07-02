<?php

require 'vendor/autoload.php';

use app\DB;
use app\JsonTable;
use app\PhpTable;
use app\TxtTable;

//$json = new JsonTable('table.json');

//print_r($json->reade());

//$json->create(["fio" => "Anton", "zp" => 100]);

$db = new DB(new TxtTable('table.txt'));
//$db->insert([0 => ['Name' => 'Иванов', 'ZP' => 150]]);
print_r($db->select());
$db->insert([0 => 0,
    1 => "Name:Иванов",
    2 => "ZP:150"
]);

//$db->insert(["fio" => "Kolya", "zp" => 11100]);
//$db->update(1, ["fio" => "Kolyaa", "zp" => 1100]);