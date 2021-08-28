<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod16-PHP-Super-Avancado/11-MVC-Classificados/");
    $config['dbname'] = '1611-MVC-Classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
} else {
    define("BASE_URL", "http://MEUSITE.COM.BR/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}
