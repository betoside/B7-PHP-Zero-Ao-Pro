<?php
// definir parametros basicos
//     mysql:              = tipo do banco de dados
//     dbname;             = nome do banco de dados
//     server              = servidor
//     user
//     pass
//     ===
//     localhost
//     Port	8889
//     Username	root
//     Password	root
$dsn = "mysql:dbname=zeroAoPro_blog;host:localhost";
$dbuser = "root";
$dbpass = "root";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falhou a conexão: ".$e->getMessage();
}