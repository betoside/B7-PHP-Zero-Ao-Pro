<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host:localhost";
$dbuser = "root";
// $dbpass = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falhou a conexão: ".$e->getMessage();
}

$sql = "SELECT * FROM usuarioSSs";
$sql = $pdo->query($sql);

echo "Total de users: ".$sql->rowCount();
