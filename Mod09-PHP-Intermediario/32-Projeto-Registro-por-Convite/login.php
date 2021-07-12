<?php
session_start();
require_once 'config.php';

if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        $info = $sql->fetch();

        $_SESSION['logado'] = $info['id'];
        header('location: index.php');
        exit;
    }
}
?>
<a href="../"><- Módulo 9</a>
<br><br>

<form method='post'>
    E-mail <br>
    <input type="email" name="email"> <br><br>

    Senha <br>
    <input type="password" name="senha"> <br><br>

    <button>Entrar</button>
    <a href="cadastrar.php">Cadastrar</a>
</form>
