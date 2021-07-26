<?php
require 'config.php';

$h = $_GET['h'];

if (!empty($_GET['h'])) {
    $pdo->query("UPDATE usuarios SET status = '1' WHERE MD5(id) = '$h'");

    // echo "Cadastro confirmado com sucesso";
    // echo '<br><br>';
    // echo '< <a href="index.php">Home</a>';
}
header('Location: index.php');
