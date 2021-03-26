<?php

abstract class User
{
    public $name;
    public $status;

    public abstract function getStatus();
}

class  Admin extends User
{
    public function getStatus()
    {
        echo "Admin";
    }
}

$user1 = new Admin;

$user1->getStatus();