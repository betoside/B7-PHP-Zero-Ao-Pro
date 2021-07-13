<?php
session_start();
require_once 'config.php';
// $_SESSION['banco']
if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
    } else {
        header('location: login.php');
        exit;
    }

} else {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag interna, Banco xyz</title>
</head>
<body>

    <h1>Banco xyz</h1>

    Titular: <?=$info['titular'];?>
    <br>
    Agência: <?=$info['agencia'];?>
    <br>
    Conta: <?=$info['conta'];?>
    <br>
    Saldo: <?=$info['saldo'];?>
    <br>
    <a href="sair.php">Sair</a>

    <hr>

    <h3>movimentação / extrato</h3>

    <style>
        .tab-extrato { border: 1px solid #ccc;  border-collpase: collapse; border-spacing: 0; }
        .tab-extrato th,
        .tab-extrato td { border: 1px solid #ddd;  border-collpase: collapse; padding: 3px 10px; }
        .green { color: green; }
        .red { color: red; }
    </style>

    <p>
        <a href="add-transacao.php">Adicionar movimentação</a> <strong>+</strong>
    </p>

    <table class="tab-extrato">
        <tr>
            <th>Data</th>
            <th>Valor</th>
            <th></th>
        </tr>
        <?php
        $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
        $sql->bindValue(':id_conta', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            
            foreach($sql->fetchAll() as $item): 
            ?>
            <tr>
                <td><?php echo date('d/m/Y H:i', strtotime($item['data_operacao']));?></td>
                <td>
                    <?php
                    if ($item['tipo'] == 0) : ?>
                        <span class="green">+ <?=$item['valor'];?></span>
                    <?php else: ?>
                        <span class="red">- <?=$item['valor'];?></span>
                    <?php endif; ?>
                </td>
                <td><a class="red" href="excluir.php?id=<?=$item['id'];?>&valor=<?=$item['valor'];?>&tipo=<?=$item['tipo'];?>">[-]</a></td>
            </tr>
            <?php
            endforeach;
        }
        ?>
    </table>
    
</body>
</html>