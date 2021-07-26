<?php
require_once 'environment.php';

define("BASE", "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod34-Projeto-CMS");

global $config;
$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'Mod34-Projeto-CMS';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
} else {
    $config['dbname'] = 'Mod34-Projeto-CMS';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}
// echo '<pre>';
// print_r($config);
// echo '</pre>';
// echo BASE;
// exit;

// echo "config['dbname']: " . $config['dbname'];
// echo '<br>';
// echo "config['host']: " . $config['host'];
// echo '<br>';
// echo "config['dbuser']: " . $config['dbuser'];
// echo '<br>';
// echo "config['dbpass']: " . $config['dbpass'];
// echo '<br>';

  // /Applications/MAMP/htdocs/B7-PHP-Zero-Ao-Pro/Mod34-Projeto-CMS/config.php
$base = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod34-Projeto-CMS";
// $config['base'] = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod34-Projeto-CMS";
// echo $base;
// exit;