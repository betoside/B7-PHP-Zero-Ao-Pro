<?php
try {
    $pdo = new PDO("mysql:dbname=37-Esqueci-senha;host=localhost", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERR: '.$e->getMessage();
}
