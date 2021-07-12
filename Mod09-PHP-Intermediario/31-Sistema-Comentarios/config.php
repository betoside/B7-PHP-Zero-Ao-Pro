<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
?>