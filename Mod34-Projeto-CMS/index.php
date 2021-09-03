<?php
session_start();
require 'config.php';

spl_autoload_register(function ($class){
    // echo $class; // Core
    // exit;
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('controllers/'.$class.'.php')) {
            require_once 'controllers/'.$class.'.php';
            // echo 'controller: '.'controllers/'.$class.'.php';
            // exit;
        }
    } elseif(file_exists('models/'.$class.'.php')) {
            require_once 'models/'.$class.'.php';  
            // echo 'models: '.'models/'.$class.'.php';
            // exit;
    } elseif(file_exists('core/'.$class.'.php')) {
            require_once 'core/'.$class.'.php'; 
            // echo 'core: '.'core/'.$class.'.php';
            // exit;
    }
});
// echo 'hello index.php';exit;

$core = new Core();
$core->run();