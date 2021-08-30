<?php
session_start(); // a primeira a ser feita antes de qualquer dado ser impresso na tela

global $pdo;

try {
    $pdo = new PDO('mysql:dbname=Mod15-Projeto-Classificados;host=localhost', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}