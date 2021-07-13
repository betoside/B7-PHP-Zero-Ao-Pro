<?php
require_once 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("DELETE FROM historico WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("location: index.php");