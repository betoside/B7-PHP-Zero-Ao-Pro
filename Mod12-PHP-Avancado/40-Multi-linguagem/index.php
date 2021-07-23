<?php
session_start();

if (!empty($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

require_once 'language.class.php';
$lang = new Language();
?>
< <a href="../">mod 12 php</a> //
<a href="index.php?lang=en">English</a> / 
<a href="index.php?lang=pt-br">Português</a> / 
<a href="index.php?lang=es">Espanhol</a> / 
<a href="index.php">Reload</a> / 
<a href="sair.php"><?=$lang->get('LOGOUT');?></a>

<hr>

Linguagem definida: <?=$lang->getLanguage();?>
<br><br>
<button><?php echo $lang->get('BUY'); ?></button>

<hr>
<!-- 
    CATEGORIA_PHOTO
    CATEGORIA_CLOTHES
    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'en', 'CATEGORIA_PHOTO', 'Photo');

    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'en', 'CATEGORIA_PHOTO', 'Photo');
    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'pt-br', 'CATEGORIA_PHOTO', 'Foto');
    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'es', 'CATEGORIA_PHOTO', 'Fotografia');

    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'en', 'CATEGORIA_CLOTHES', 'Clothes');
    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'pt-br', 'CATEGORIA_CLOTHES', 'Roupas');
    INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES (NULL, 'es', 'CATEGORIA_CLOTHES', 'Roupas (es)');
 -->

<style>
    .semana td {padding: 8px;background: #ddd;}
</style>
<table class=semana>
    <tr>
        <td><?php echo $lang->get('MONDAY'); ?></td>
        <td><?php echo $lang->get('TUESDAY'); ?></td>
        <td><?php echo $lang->get('WEDNESDAY'); ?></td>
        <td><?php echo $lang->get('THURSDAY'); ?></td>
        <td><?php echo $lang->get('FRIDAY'); ?></td>
        <td><?php echo $lang->get('SATURDAY'); ?></td>
        <td><?php echo $lang->get('SUNDAY'); ?></td>
    </tr>
</table>

<br>
Categoria (from DB): <?=$lang->get('CATEGORIA_PHOTO');?>
<br>

<hr>
<p>Buscar todas as categorias do banco de dados.</p>

<?php
$sql = "SELECT id, (select valor from lang where lang.lang = :lang and lang.nome = categoria.lang_item) as nome FROM categoria";
$sql = $pdo->prepare($sql);
$sql->bindValue(':lang', $lang->getLanguage());
$sql->execute();

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $categoria) {
        echo 'Categoria nome: '. $categoria['nome'] .'<br>';
    }

}


?>