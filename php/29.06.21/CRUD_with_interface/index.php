<?php

require 'vendor/autoload.php';

use app\DB;
use app\JsonTable;
use app\PhpTable;
use app\TxtTable;

//$json = new JsonTable('table.json');

//print_r($json->reade());

//$json->create(["fio" => "Anton", "zp" => 100]);
$jsonDriver = new JsonTable('table.json');
$txtDriver = new TxtTable('table.txt');
$db = new DB($txtDriver);
//$db->insert([0 => ['Name' => 'Иванов', 'ZP' => 150]]);
print_r($db->select());


$db->insert(["Name" => "Kolya", "ZP" => 11100]);
$db->insert(["Name" => "Anton", "ZP" => 900]);
//$db->update(1, ["fio" => "Kolyaa", "zp" => 1100]);