<?php
require_once 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    // $_GET['id']
    $id = addslashes($_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id=".$id;
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        $usuario = $sql->fetch();
    }
} else {
    header('Location: index.php');
}

if (
    isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['idade']) && !empty($_POST['idade'])
    ) {

    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $idade = addslashes($_POST['idade']);

    $sql = "UPDATE usuarios SET nome='$nome', idade='$idade' WHERE id=".$id;
    $sql = $pdo->query($sql);

    header('Location: index.php');
}

?>
<link rel="stylesheet" href="style.css">
<title>Editar - Ordenação de Resultados</title>

<a href="index.php">< voltar</a>
<br><br>

<form method="post" class="form-editar">
    <input type="hidden" name="id" value="<?=$usuario['id'];?>">
    <label for="nome">
        nome 
        <br>
        <input type="text" name="nome" value="<?=$usuario['nome'];?>" placeholder="nome" required>
    </label>
    <br></br>

    <label for="idade">
        idade 
        <br>
        <input type="text" name="idade" value="<?=$usuario['idade'];?>" placeholder="idade" required>
    </label>
    <br></br>

    <button>Atualizar</button>
</form>