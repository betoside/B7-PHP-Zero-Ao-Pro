<?php
session_start();

// if (file_exists('config.php')) {
//         echo 'CONFIG.PHP exists';
// } else {
//         echo 'CONFIG.PHP doesn\'t exists';
// }
// exit;

require 'config.php';

spl_autoload_register(function ($class){
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('controllers/'.$class.'.php')) {
                require_once 'controllers/'.$class.'.php';
        }
    } elseif(file_exists('models/'.$class.'.php')) {
            require_once 'models/'.$class.'.php';
    } elseif(file_exists('core/'.$class.'.php')) {
            require_once 'core/'.$class.'.php';
    }
});
// echo 'INDEX';
// exit;
// echo $base; // http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site
// exit;
$core = new Core();
$core->run();
?>