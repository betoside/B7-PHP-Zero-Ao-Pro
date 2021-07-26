<?php
require 'config.php';

if (!empty($_GET['id']) && isset($_GET['id'])) {

    // echo 'oi, eu existo';
    // echo '<br>';
    // echo $_GET['id'];
    // echo '<br>';
    // echo 'E aí Gutão';
    // exit;
    // echo 'Duvido vc me enxergar';

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $_GET['id']);
    $sql->execute();

}

header('Location: index.php');