<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host:localhost";
$dbuser = "root";
$dbpass = "root";

try {
    $db = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falhou a conexão: ".$e->getMessage();
}