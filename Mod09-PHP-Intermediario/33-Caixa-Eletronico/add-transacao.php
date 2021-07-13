<?php
session_start();
require_once 'config.php';
// tipo, valor
if (isset($_POST['tipo'])) {
    $tipo = addslashes($_POST['tipo']);
    $valor = str_replace(',', '.', $_POST['valor']);
    $valor = floatval($valor);
    // padrao BRA 17,5
    // padrao USA 17.5
    // echo "tipo: " .  $tipo . "<br>";
    // echo "valor: " .  $valor . "<br>";
    // exit;

    $sql = $pdo->prepare(
        "INSERT INTO historico (id_conta, tipo, valor, data_operacao) 
         VALUES                (:id_conta, :tipo, :valor, NOW() )
    ");
    $sql->bindValue(":id_conta", $_SESSION['banco']);
    $sql->bindValue(":tipo", $tipo);
    $sql->bindValue(":valor", $valor);
    $sql->execute();
    // echo "<pre>";
    // print_r($sql);
    // echo "</pre>";
    // exit;

    if ($tipo == 0) {
        // deposito
        $sql = $pdo->prepare(
            "UPDATE contas 
             SET saldo = saldo + :valor 
             WHERE id = :id
        ");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    } else {
        // retirada
        $sql = $pdo->prepare(
            "UPDATE contas 
             SET saldo = saldo - :valor 
             WHERE id = :id
        ");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }

    header('location: index.php');
    exit;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add movimentação - Caixa Eletrônico</title>
</head>
<body>
    <p>
        <<< <a href="../">módulo 9</a> / <a href="index.php">index</a> / <a href="">reload</a>
    </p>

    <h2>Adicionar movimentação à conta</h2>

    <form method="post">
        Tipo: <br>
        <label for="tipo-deposito">
            <input type="radio" name="tipo" value="0" id="tipo-deposito"> Depósito
        </label>
        <br>
        <label for="tipo-retirada">
            <input type="radio" name="tipo" value="1" id="tipo-retirada"> Retirada
        </label>
        <br>
        <br>

        Valor: <br>
        <input type="text" name="valor" pattern="[0-9.,]{1,}">
        <br><br>

        <button>Adicionar</button>
    </form>
</body>
</html>