<?php
try {
    $pdo = new PDO('mysql:dbname=projeto_tags;host=localhost;', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
    exit;
}