<?php
require_once 'contato.class.php';
$contato = new Contato();

if (!empty($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $contato->adicionar($email, $nome);

    // echo 'nome: '.$nome;
    // echo '<br>';
    // echo 'email: '.$email;
    header('Location: index.php');
}

