<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Err: " . $e->getMessage();
    exit;
}