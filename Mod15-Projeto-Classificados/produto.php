<?php require 'pages/header.php';?>
<?php 
require 'classes/anuncios.class.php';
require_once 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
} else { 
    ?>
    <script>window.location.href="index.php"</script>
    <?php
    exit;
}
$info = $a->getAnuncio($id);
?>

    <div class="container">

        <div class="row">
            <div class="col-4">

                <div id="meuCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php foreach ($info['fotos'] as $chave => $foto): ?>

                            <div class="carousel-item <?=($chave=='0')?'active':'';?>">
                                <img src="assets/images/anuncios/<?=$foto['url'];?>" class="d-block w-100" /> 
                            </div>

                        <?php endforeach ?>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#meuCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#meuCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



            </div>
            <div class="col-8">
                <h1><?=$info['titulo'];?></h1>
                <h4><?=$info['categoria'];?></h4>
                <p><?=$info['descricao'];?></p>
                <br>
                <h3>R$ <?=$info['valor'];?></h3>
                <h3>Telefone: <strong><?=$info['telefone'];?></strong></h3>
            </div>
        </div>


    </div>

<?php require 'pages/footer.php';?>
