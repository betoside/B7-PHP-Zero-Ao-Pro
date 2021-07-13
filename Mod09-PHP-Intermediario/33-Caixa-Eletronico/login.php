<?php
session_start();
require_once 'config.php';

if (isset($_POST['agencia']) && !empty($_POST['agencia'])) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    // echo "agencia: " .  $agencia . "<br>";
    // echo "conta: " .  $conta . "<br>";
    // echo "senha: " .  $senha . "<br>";
    // exit;

    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();
    // echo "<pre>";
    // print_r($sql);
    // echo "</pre>";
    // exit;

    if ($sql->rowCount()>0) {
        $sql = $sql->fetch();

        $_SESSION['banco'] = $sql['id'];
        header('location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Caixa Eletrônico</title>
</head>
<body>
    <p>
        <<< <a href="../">módulo 9</a> / <a href="index.php">index</a> / <a href="">reload</a>
    </p>
    <h2>login caixa eletronico</h2>
    <form method="post">
        Agência: <br>
        <input type="text" name="agencia"><br><br>
        Conta: <br>
        <input type="text" name="conta"><br><br>
        Senha: <br>
        <input type="password" name="senha"><br><br>

        <button>Entrar</button>
        <!--
        <br>
        -->
        <!-- <input type="button" value="Entrar" onclick="submit"> -->
    </form>
</body>
</html>