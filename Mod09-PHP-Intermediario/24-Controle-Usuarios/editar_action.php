<?php
require_once 'config.php';

$id = 0;
if (isset($_POST['id']) && !empty($_POST['id']) ) {
    $id = addslashes($_POST['id']);
} else {
    header("Location: index.php");
}

if ( isset($_POST['nome']) && !empty($_POST['nome']) ) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    // $senha = md5(addslashes($_POST['senha']));

    $sql = "UPDATE usuarios SET 
        nome = '$nome',
        email = '$email'
        WHERE id = $id
    ";
    $sql = $pdo->query($sql);

}

header("Location: index.php");