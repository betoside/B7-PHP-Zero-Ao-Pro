<?php
require_once 'contato.class.php';
$contato = new Contato();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // echo $_GET['id'];
    // exit;

    $info = $contato->getInfo($id);
    // echo '<pre>';
    // print_r($info);
    // echo '</pre>';
    // exit;
    
    if (empty($info['email'])) {
        header('Location: index.php');
        exit;
    }
    
} else {
    header('Location: index.php');
    exit;
}

?>
<h1>editar</h1>
< <a href="index.php">home</a> / <a href="">reload</a>
<br><br>
<form action="editar_submit.php" method="post">
<!-- <form action="" method="post"> -->
    <input type="hidden" name="id" value="<?=$info['id'];?>">
    Nome: <br>
    <input type="text" name="nome" value="<?=$info['nome'];?>"> <br><br>

    Email: <br>
    <input type="email" name="email" value="<?=$info['email'];?>" required> <br><br>

    <button>Salvar</button>
</form>
