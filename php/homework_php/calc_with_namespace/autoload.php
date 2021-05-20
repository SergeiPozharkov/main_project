<?php

spl_autoload_register(function ($class) {
    $path = str_replace("\\", "/", "App/$class.php");
    if (file_exists($path)) {
        include $path;
    }
});