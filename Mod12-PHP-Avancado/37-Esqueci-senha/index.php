<?php
require_once 'config.php';
?>
< <a href="../">mod 12</a>
<br><br>
<a href="esqueci.php">Esqueci a senha</a>
<br><br>
<br><br>

<?php
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $usuarios = $sql->fetchAll();
    echo '<table class=usuarios>';
    foreach($usuarios as $user): ?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['email'];?></td>
            <td><?=$user['senha'];?></td>
        </tr>
    <?php
    endforeach;
    echo '</table>';
}
?>
<style>
    .usuarios td {padding: 8px;background: #ddd;}
</style>