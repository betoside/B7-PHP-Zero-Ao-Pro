<?php
try {
    $pdo = new PDO("mysql:dbname=46-Sistema-de-Reservas;host=localhost", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERR: " . $e->getMessage();
}



// try {
//     global $pdo;
//     $pdo = new PDO("mysql:dbname=40-Multi-linguagem;host=localhost", "root", "root");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'ERR: '.$e->getMessage();
// }
