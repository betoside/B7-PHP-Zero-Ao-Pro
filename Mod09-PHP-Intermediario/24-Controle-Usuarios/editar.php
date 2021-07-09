<?php
require_once 'config.php';

$id = 0;

if (isset($_GET['id']) && !empty($_GET['id']) ) {

    $id = addslashes($_GET['id']);

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    } else { // caso $id nao exista
        header("Location: index.php");
    }

} else {
    header("Location: index.php");
}
?>
<title>Editar User, Mod 9, Control users</title>
<link rel="stylesheet" href="style.css">

<a href="index.php">< Home</a>

<br>
<br>

<form action="editar_action.php" method="POST" class="form-editar">
    <input type="hidden" name="id" value="<?=$dado['id'];?>">
    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome" placeholder="Nome" required value="<?=$dado['nome'];?>">
    <br><br>

    <label for="email">E-mail</label>
    <br>
    <input type="email" name="email" placeholder="E-mail" required value="<?=$dado['email'];?>">
    <br><br>

    <!-- 
    <label for="senha">Senha</label>
    <br>
    <input type="password" name="senha">
    <br><br>
     -->
    <button>Atualizar</button>
</form>