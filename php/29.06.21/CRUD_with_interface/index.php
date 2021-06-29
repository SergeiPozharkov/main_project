<?php

require 'vendor/autoload.php';

use app\DB;
use app\JsonTable;
use app\PhpTable;

$json = new JsonTable('table.json');

//print_r($json->reade());

//$json->create(["fio" => "Anton", "zp" => 100]);

$db = new DB(new PhpTable('table.php'));
$db->insert(["fio" => "Anton", "zp" => 100]);
$db->insert(["fio" => "Kolya", "zp" => 11100]);
$db->update(1, ["fio" => "Kolyaa", "zp" => 1100]);