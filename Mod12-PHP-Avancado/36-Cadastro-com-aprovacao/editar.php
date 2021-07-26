<?php
// editar step 1
// ?id=10
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
    
    require 'config.php';
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $user = $sql->fetch();
    } else {
        header('Location: index.php');
        exit;
    }

} else {
    header('Location: index.php');
    exit;
}

// editar step 2
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $id = addslashes($_POST['id']);

    require 'config.php';
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: index.php');
}
?>

< <a href="index.php">voltar</a>
<br><br>

    <?php
    // Array
    // (
    //     [id] => 1
    //     [0] => 1
    //     [nome] => jorge
    //     [1] => jorge
    //     [email] => jorge@email.com
    //     [2] => jorge@email.com
    //     [status] => 0
    //     [3] => 0
    //     [hash] => 0
    //     [4] => 0
    // )
    ?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?=$user['id'];?>" />
    Nome <br>
    <input type="text" name="nome" value="<?=$user['nome'];?>" />
    <br><br>
    E-mail <br>
    <input type="email" name="email" value="<?=$user['email'];?>" />
    <br><br>
    <button>Atualizar</button>
</form>

<hr>