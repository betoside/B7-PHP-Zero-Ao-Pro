<?php
require_once 'contato.class.php';
$contato = new Contato();
// echo 'index loaded';
$contato->adicionar('carlos@email.com', 'carlos');
$contato->adicionar('jac@email.com');
$contato->adicionar('Fabio@email.com', 'Fabio');

// $nome = $contato->getNome('jac@email.com');
// $nome = $contato->getNome('carlos@email.com');
// echo 'Nome: '.$nome;
// echo '<br>';
$lista = $contato->getAll();
echo '<pre>';
print_r($lista);
echo '</pre>';
foreach($lista as $pessoa):
    echo 'Nome: '.$pessoa['nome'].'<br>';
    echo 'Email: '.$pessoa['email'].'<br>';
    echo '<hr>';
endforeach;
echo '<br>';

$contato->editar('jac', 'jac@email.com');
// $excluir = $contato->excluir('Fabio@email.com');
// echo $excluir;