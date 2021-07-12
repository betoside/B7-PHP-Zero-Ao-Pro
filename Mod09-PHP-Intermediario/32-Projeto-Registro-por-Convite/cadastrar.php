<?php
session_start();
require 'config.php';

if(!empty($_GET['codigo'])) {
    $codigo = addslashes($_GET['codigo']);
    // aklsjrl1k2j40812j489jlajkshr
    // QUERY
    // $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo'";
    // $sql = $pdo->query($sql);
    // PREPARE, BINDVALUE, EXECUTE
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE codigo = :codigo");
    $sql->bindValue(':codigo', $codigo);
    $sql->execute();

    if ($sql->rowCount()==0) { // se mandar codigo errado, vai p login
        header("Location: login.php");
        exit;
    }

} else { // se nao mandar codigo, vai p login
	header("Location: login.php");
	exit;
}

if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() <= 0) {

        $codigo = md5(rand(0,99999).rand(0,99999));
        $sql = "INSERT INTO usuarios (email, senha, codigo) VALUES ('$email', '$senha', '$codigo')";
        $sql = $pdo->query($sql);

        unset($_SESSION['logado']);

        header('location: index.php');
        exit;
    }
}

?>

<a href="../"><- Módulo 9</a> | <a href="login.php"><- Login</a>
<br>

<h3>Cadastrar</h3>

<form action="" method='post'>

    E-mail
    <br>
    <input type="email" name="email">
    <br><br>

    Senha
    <br>
    <input type="password" name="senha">
    <br><br>

    <button>Cadastrar</button>

</form>
