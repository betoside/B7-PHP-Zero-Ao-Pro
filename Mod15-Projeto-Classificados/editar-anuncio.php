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
    if (isset($_FILES['fotos'])) {
        $fotos = $_FILES['fotos'];
    } else {
        $fotos = array();
    }

    $a->editAnuncio($categoria, $titulo, $valor, $descricao, $estado, $fotos, $_GET['id']);

    ?>
    <div class="alert alert-success">
        Produto editado com sucesso!
    </div>
    <?php
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $info = $a->getAnuncio($_GET['id']);
} else {
    ?>
    <script>window.location.href="meus-anuncios.php";</script>
    <?php
    exit;
}
?>

    <div class="container">

        <h1>Meus anuncios > editar anúncio</h1>
        <br>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group mb-10">
                <label for="categoria">categoria:</label>
                <select name="categoria">
                    <?php
                    require 'classes/categorias.class.php';
                    $c = new Categorias();
                    $categorias = $c->getLista();
                    foreach ($categorias as $cat):
                        ?>
                        <option value="<?=$cat['id'];?>" <?php echo ($info['id_categoria']==$cat['id']) ? 'selected="selected"' : '';?>><?=$cat['nome'];?></option>
                        <?php
                    endforeach;
                    ?>
                    
                </select>
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="titulo">título:</label>
                <input type="text" name="titulo" class="form-control" value="<?=$info['titulo'];?>">
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="valor">valor:</label>
                <input type="text" name="valor" class="form-control" value="<?=$info['valor'];?>">
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="descricao">descricao:</label>
                <textarea name="descricao" class="form-control"><?=$info['descricao'];?></textarea>
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="estado">estado de conservacao:</label>
                <select name="estado">
                    <option value="0" <?php echo ($info['estado']==0) ? 'selected="selected"' : '';?>>ruim</option>
                    <option value="1" <?php echo ($info['estado']==1) ? 'selected="selected"' : '';?>>bom</option>
                    <option value="2" <?php echo ($info['estado']==2) ? 'selected="selected"' : '';?>>otimo</option>
                </select>
            </div>
            <br>
            <div class="form-group mb-10">
                <label for="descricao">Fotos do anúncio:</label>
                <input type="file" name="fotos[]" multiple>
            </div>
            <br>
            <div class="container fotos">               
                <?php foreach ($info['fotos'] as $foto): ?>
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/anuncios/<?=$foto['url'];?>" class="card-img-top" alt="">
                    <div class="card-body-">
                        <a href="excluir-foto.php?id=<?=$foto['id'];?>" class="btn text-danger">x excluir x</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <br>
            <input type="submit" class="btn btn-secondary" value="Salvar">



        </form>
    
    </div>


<?php
require 'pages/footer.php';
?>