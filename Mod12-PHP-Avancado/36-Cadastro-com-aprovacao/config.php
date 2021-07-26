<?php
try {
    $dsn = "mysql:dbname=36-Cadastro-com-aprovacao;host=localhost";
    $dbuser = 'root';
    $dbpass = 'root';
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}