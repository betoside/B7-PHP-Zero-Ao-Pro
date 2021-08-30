<?php
require 'pages/header.php';
if (empty($_SESSION['cLogin'])) {
    ?>
    <script>window.location.href="login.php"</script>
    <?php
    exit;
}

require 'classes/anuncios.class.php';
$a = new Anuncios();
if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
    $categoria = addslashes($_POST['categoria']);
    $titulo = addslashes($_POST['titulo']);
    $valor = addslashes($_POST['valor']);
    $descricao = addslashes($_POST['descricao']);
    $estado = addslashes($_POST['estado']);

    $a->addAnuncio($categoria, $titulo, $valor, $descricao, $estado);

    ?>
    <div class="alert alert-success">
        Produto adicionado com sucesso!
    </div>
    <?php
}
?>

    <div class="container">

        <h1>Meus anuncios > adicionar anúncio</h1>
        <br>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group mb-10">
                <label for="categoria">categoria:</label>
                <select name="categoria">
                    <?php
                    require 'classes/categorias.class.php';
                    $c = new Categorias();
                    $categorias = $c->getLista();
                    foreach ($categorias as $item):
                        ?>
                        <option value="<?=$item['id'];?>"><?=$item['nome'];?></option>
                        <?php
                    endforeach;
                    ?>
                    
                </select>
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="titulo">título:</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="valor">valor:</label>
                <input type="text" name="valor" class="form-control">
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="descricao">descricao:</label>
                <textarea name="descricao" class="form-control"></textarea>
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="estado">estado de conservacao:</label>
                <select name="estado">
                    <option value="0">ruim</option>
                    <option value="1">bom</option>
                    <option value="2">otimo</option>
                </select>
            </div>
            <br>
            <input type="submit" class="btn btn-secondary" value="Adicionar">



        </form>
    
    </div>


<?php
require 'pages/footer.php';
?>