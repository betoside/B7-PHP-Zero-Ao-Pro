<?php
require_once 'config.php';

if (
    isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['mensagem']) && !empty($_POST['mensagem'])
    )
     {        
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    // echo 'here...<br>';
    // echo $id . '<br>';
    // echo $nome . '<br>';
    // echo $mensagem . '<br>';
    // exit;

    $sql = $pdo->prepare("UPDATE mensagens SET nome = :nome, msg = :msg WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':msg', $mensagem);
    $sql->execute();
}

header("location: index.php");