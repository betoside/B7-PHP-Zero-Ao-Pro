<?php
require_once 'contato.class.php';
$contato = new Contato();

if (!empty($_POST['id'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    if (!empty($email)) {
        $contato->editar($nome, $email, $id);
    }

    // echo 'nome: '.$nome;
    // echo '<br>';
    // echo 'id: '.$id;
    header('Location: index.php');
}

