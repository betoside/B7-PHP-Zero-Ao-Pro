<?php
require 'pages/header.php';
if (empty($_SESSION['cLogin'])) {
    ?>
    <script>window.location.href="login.php"</script>
    <?php
    exit;
}
?>

    <div class="container">

        <h1>Meus anuncios</h1>

        <a href="add-anuncio.php" class="btn btn-primary">Adicionar anúncio</a>
        <br>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Título</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            // echo 'cLogin: '. $_SESSION['cLogin'];
            // exit;
            require 'classes/anuncios.class.php'; 
            $a = new Anuncios();
            $anuncios = $a->getMeusAnuncios($_SESSION['cLogin']);

            foreach ($anuncios as $anuncio):
                if (empty($anuncio['url'])) {
                    $anuncio['url'] = "default.png";
                }
                ?>
                <tr>
                    <td><img src="assets/images/anuncios/<?=$anuncio['url'];?>" alt="" width="50"></td>
                    <td>
                        <h3><?=$anuncio['titulo'];?></h3>
                        <h4><?=$anuncio['categoria'];?></h4>
                        <p><?=$anuncio['descricao'];?></p>

                    </td>
                    <td>R$ <?=number_format($anuncio['valor'], 2);?></td>
                    <td>
                        <a href="editar-anuncio.php?id=<?=$anuncio['id'];?>" class="btn btn-info">Editar</a>
                        <a href="excluir-anuncio.php?id=<?=$anuncio['id'];?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>

            </tbody>
        </table>
    </div>
    

<?php
require 'pages/footer.php';
?>