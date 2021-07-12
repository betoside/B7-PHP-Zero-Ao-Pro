<?php
require_once 'config.php';

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':msg', $mensagem);
    $sql->execute();
}

header("location: index.php");