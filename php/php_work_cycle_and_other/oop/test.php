<?php

require_once "class_18.php";

$obj = new \Home\User("Zurab", "123123", "zurabi4@mail.ru", "Kazan");
echo $obj->getInfo();