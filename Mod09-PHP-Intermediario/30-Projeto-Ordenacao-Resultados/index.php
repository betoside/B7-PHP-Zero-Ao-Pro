<?php 
require_once 'config.php';

$ordenar = '';
if (isset($_GET['ordenar']) && !empty($_GET['ordenar'])) {

    $ordenar = addslashes($_GET['ordenar']);
    // ?ordenar=
    // - id
    // - nome
    // - idade
    $sql = "SELECT * FROM usuarios ORDER BY ".$ordenar;

} else {
    $sql = "SELECT * FROM usuarios";
}

$sql = $pdo->query($sql);

?>
<link rel="stylesheet" href="style.css">
<title>Ordenação de Resultados</title>
<a href="../"><small>< Raiz do Módulo 9 </small></a>
<!-- 
| 
<a href="adicionar.php">+ Adicionar User</a>
 -->

<br><br>

<form method="get">
    
    <label for="id">
        <input type="radio" name="ordenar" value="id" id='id' <?=($ordenar == 'id')?'checked':'';?>> 
        id
    </label>
    <br>
    
    <label for="nome">
        <input type="radio" name="ordenar" value="nome" id='nome' <?=($ordenar == 'nome')?'checked':'';?>> 
        nome
    </label>
    <br>

    <label for="idade">
        <input type="radio" name="ordenar" value="idade" id="idade" <?=($ordenar == 'idade')?'checked':'';?>> 
        idade
    </label>
    <br>
    <br>
    <button>ordenar</button>
</form>

<br><br>

<table>
    <tr>
        <th></th>
        <th>Nome</th>
        <th>idade</th>
        <th>Ações</th>
    </tr>
    <?php
    if ($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '  <td>'.$usuario['id'].'</td>';
            echo '  <td>'.$usuario['nome'].'</td>';
            echo '  <td>'.$usuario['idade'].'</td>';
            // echo '  <td>
            //             <a href="excluir.php?id='.$usuario['id'].'" class="excluir">Excluir</a>
            //             | 
            //             <a href="editar.php?id='.$usuario['id'].'" class="editar">Editar</a>
            //         </td>';
            echo '  <td>
                        <a href="editar.php?id='.$usuario['id'].'" class="editar">Editar</a>
                    </td>';
            echo '</tr>';
        }
    }
    ?>
</table>