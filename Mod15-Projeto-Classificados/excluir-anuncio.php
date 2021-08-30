<?php
require 'config.php'; 

if(!isset($_SESSION['cLogin'])){
    header('Location: login.php');
}

require 'classes/anuncios.class.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = addslashes($_GET['id']);
    $a = new Anuncios();
    $a->excluirAnuncio($id);

    header('Location: meus-anuncios.php');

}