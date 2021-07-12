<?php
require_once 'config.php';
?>
<script>
    function confirmDelete(id) {
        if (confirm("Excluir mensagem?")) {
            location.href = 'excluir.php?id=' + id;
        }
    }
    function confirmEditar(id) {
        location.href = 'editar.php?id=' + id;
    }
</script>
<link rel="stylesheet" href="style.css">
<a href="../">< Raiz Módulo 09</a>
<br><br><br>
<fieldset>
    <form method="post" action="incluir.php">

        Nome:
        <br>
        <input type="text" name="nome" required>
        <br><br>
        
        Mensagem:
        <br>
        <textarea name="mensagem" cols="30" rows="10" required></textarea>
        <br><br>

        <button>Enviar mensagem</button>
        
    </form>
</fieldset>
<br><br>


<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if ($sql->rowCount()>0) {
    foreach($sql->fetchAll() as $msg):
    ?>
    <!-- bloco msg -->
    <p>
        <small>
            <button onclick="confirmDelete(<?=$msg['id'];?>)" class="excluir"><strong>|x|</strong> excluir</button>
            |
            <button onclick="confirmEditar(<?=$msg['id'];?>)" class="editar"><strong>\o/</strong> editar</button>
            <!-- <a onclick="confirmDelete(<?=$msg['id'];?>)" href="javascript: return false;?>" class="editar">editar <strong>\o/</strong></a>
            | 
            <a href="editar.php?id=<?=$msg['id'];?>" class="editar">editar <strong>\o/</strong></a> -->
        </small>

    </p>
    <strong>
        <?=$msg['nome'];?>
    </strong>
    <br>
        <?=$msg['msg'];?>
    <hr>
    <!-- /bloco msg -->
    <?php
    endforeach;
} else { 
    ?>

    Não há mensagem

<?php 
}
?>

