<?php

spl_autoload_register(function ($class) {
//var_dump($class);
    $classParts = explode('\\', $class);
    $classParts[0] = __DIR__;
    $path = implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
   // die($path);
    if(file_exists($path)){
        require $path;
    } else {
        throw new \RuntimeException("Class: " . $class . " - Not Found!");
    }

});