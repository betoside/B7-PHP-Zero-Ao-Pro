<?php
session_start();
require 'config.php';

spl_autoload_register(function($class){
    if (file_exists('controllers/'.$class.'.php')) {
        require 'controllers/'.$class.'.php';
    } 
    else if(file_exists('models/'.$class.'.php')){
        require 'models/'.$class.'.php';        
    } 
    else if(file_exists('core/'.$class.'.php')){
        require 'core/'.$class.'.php';        
    }
});

$core = new Core();
$core->run();



// http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod16-PHP-Super-Avancado/05-Estrutura-MVC-Index-Rewrite/?url=home
// http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod16-PHP-Super-Avancado/05-Estrutura-MVC-Index-Rewrite/?url=contato