<?php
session_start();
require_once 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // FORMA 1, MENOS SEGURA PQ PODE MANIPULAR VALOR NA URL
    // $valor = $_GET['valor'];
    // $tipo = $_GET['tipo'];

    // FORMA 2, MAIS SEGURA PQ PEGA OS DADOS DO BANCO E NAO DA URL
    $sql = $pdo->prepare(
        "SELECT * FROM historico 
         WHERE id = :id
    ");
    $sql->bindValue(":id", $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
        $valor = $info['valor'];
        // echo 'Tipo de transacao: ' . $info['tipo'];
        // exit;
    }

    if ($info['tipo'] == 1) {
        // excluindo um débito
        $sql = $pdo->prepare(
            "UPDATE contas 
             SET saldo = saldo + :valor 
             WHERE id = :id
        ");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    } else {
        // excluindo um crédito
        $sql = $pdo->prepare(
            "UPDATE contas 
             SET saldo = saldo - :valor 
             WHERE id = :id
        ");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }

    $sql = $pdo->prepare("DELETE FROM historico WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("location: index.php");