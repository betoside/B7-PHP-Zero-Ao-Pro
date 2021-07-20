<?php
require_once 'contato.class.php';
$contato = new Contato();


if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // echo $_GET['id'];
    // echo $id;
    // exit;

    $contato->excluirPeloId($id);
    
}

header('Location: index.php');
