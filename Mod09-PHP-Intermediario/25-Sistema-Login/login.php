<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && empty($_POST['email'])==false) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = $db->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

    if ($sql->rowCount() > 0) { // retorna total de registros

        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        // echo '<pre>';
        // print_r($dado);
        // echo '</pre>';
        // echo $dado['id'];
        // echo "<br>";
        // echo $dado['nome'];
        // echo "<br>";
        // echo $dado['email'];
        // echo "<br>";
        // echo $dado['senha'];
        // echo "<br>";
        // exit;
        header('Location: index.php');
    }
}

?>

<title>25 - sist login</title>
<p>
    <a href="../">< parent directory</a>
</p>

<h2>Página de login </h2>

<!-- login_action.php -->
<form action="login.php" method="post">
    E-mail: <br>
    <input type="email" name="email">
    <br><br>

    Senha: <br>
    <input type="password" name="senha" id="">
    <br><br>

    <button>Entrar</button>
</form>

