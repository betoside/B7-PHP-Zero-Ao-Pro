<?php 
require_once 'config.php';
?>
<link rel="stylesheet" href="style.css">
<title>Mod 9, Control users</title>
<a href="../"><small>< Raiz do Módulo 9 </small></a> | 
<a href="adicionar.php">+ Adicionar User</a>
<br><br>
<table>
    <tr>
        <th></th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        // resultado
        foreach($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '  <td>'.$usuario['id'].'</td>';
            echo '  <td>'.$usuario['nome'].'</td>';
            echo '  <td>'.$usuario['email'].'</td>';
            echo '  <td>
                        <a href="excluir.php?id='.$usuario['id'].'" class="excluir">Excluir</a>
                        | 
                        <a href="editar.php?id='.$usuario['id'].'" class="editar">Editar</a>
                    </td>';
            echo '</tr>';

        }
    } else {
        // sem resultado
    }
    ?>
</table>