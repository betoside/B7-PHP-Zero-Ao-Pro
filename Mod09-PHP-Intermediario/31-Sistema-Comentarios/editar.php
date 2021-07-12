<?php
require_once 'config.php';
$msg = [];

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("SELECT * FROM mensagens WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount()>0) {
        $msg = $sql->fetch();
    } else {
        header("location: index.php");
    }
}
?>
<link rel="stylesheet" href="style.css">
<fieldset>
    <form method="post" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$msg['id'];?>">

        Nome:
        <br>
        <input type="text" name="nome" value="<?=$msg['nome'];?>" required>
        <br><br>
        
        Mensagem:
        <br>
        <textarea name="mensagem" cols="30" rows="10" required><?=$msg['msg'];?></textarea>
        <br><br>

        <button>Atualizar mensagem</button>
        
    </form>
</fieldset>