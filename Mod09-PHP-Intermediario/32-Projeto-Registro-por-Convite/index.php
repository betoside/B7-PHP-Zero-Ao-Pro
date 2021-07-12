<?php
session_start();
require_once 'config.php';


if (empty($_SESSION['logado'])) {
    header('location: login.php');
    exit;
}

$email = '';
$codigo = '';

$sql = "SELECT email, codigo FROM usuarios WHERE id = '". addslashes($_SESSION['logado']) ."'";
$sql = $pdo->query($sql);

if ($sql->rowCount()>0) {
    $info = $sql->fetch();
    $email = $info['email'];
    $codigo = $info['codigo'];
}
?>

<h1>Área interna do sistema</h1>
<p>
    Usuário: <?=$email;?> - <a href="sair.php">Sair</a>
</p>
<p>
    Link Correto: 
    <a href="http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod09-PHP-Intermediario/32-Projeto-Registro-por-Convite/cadastrar.php?codigo=<?=$codigo;?>">
    http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod09-PHP-Intermediario/32-Projeto-Registro-por-Convite/cadastrar.php?codigo=<?=$codigo;?>
    </a>
</p>
<p>
    Link Errado: 
    <a href="http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod09-PHP-Intermediario/32-Projeto-Registro-por-Convite/cadastrar.php?codigo=AAA<?=$codigo;?>">
    http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod09-PHP-Intermediario/32-Projeto-Registro-por-Convite/cadastrar.php?codigo=AAA<?=$codigo;?>
    </a>
</p>