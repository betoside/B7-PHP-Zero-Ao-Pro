<?php
require_once 'contato.class.php';
$contato = new Contato();
// echo 'index loaded';
// $contato->adicionar('carlos@email.com', 'carlos');
// $contato->adicionar('jac@email.com');
// $contato->adicionar('Fabio@email.com', 'Fabio');

// $nome = $contato->getNome('jac@email.com');
// $nome = $contato->getNome('carlos@email.com');
// echo 'Nome: '.$nome;
// echo '<br>';
// $lista = $contato->getAll();
// echo '<pre>';
// print_r($lista);
// echo '</pre>';
// foreach($lista as $pessoa):
//     echo 'Nome: '.$pessoa['nome'].'<br>';
//     echo 'Email: '.$pessoa['email'].'<br>';
//     echo '<hr>';
// endforeach;
// echo '<br>';

// $contato->editar('jac', 'jac@email.com');
// $excluir = $contato->excluir('Fabio@email.com');
// echo $excluir;
?>
<h1>contatos</h1>
<a href="adicionar.php">[ adicionar ]</a> / <a href="">reload</a>
<br><br>
<style>
    * {font-family: sans-serif;}
    table {}
    table tr {}
    table tr th,
    table tr td {padding: 10px;}
    table tr th {background: rgba(0,0,255, .6);}
    table tr td {background: rgba(0,255,0, .6);}
    .editar {background: blue; display: inline-block; padding: 3px; color: #fff;}
    .excluir {font-weight: bold; background: yellow; display: inline-block; padding: 3px; color: #f00;}
    .editar,
    .excluir {text-decoration: none;}
</style>
<table border=0>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>editar</th>
    </tr>
    <?php
    $lista = $contato->getAll();
    foreach($lista as $pessoa): ?>
        <tr>
            <td><?=$pessoa['id'];?></td>
            <td><?=$pessoa['nome'];?></td>
            <td><?=$pessoa['email'];?></td>
            <td>
                <a class="editar" href="editar.php?id=<?=$pessoa['id'];?>">editar</a>
                <a class='excluir' href="excluir.php?id=<?=$pessoa['id'];?>">excluir</a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>