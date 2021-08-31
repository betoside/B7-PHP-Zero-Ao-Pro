<?php require 'pages/header.php';?>
<?php 
require 'classes/anuncios.class.php';
require_once 'classes/usuarios.class.php';
require_once 'classes/categorias.class.php';
$a = new Anuncios();
$u = new Usuarios();
$c = new Categorias();

$filtros = array(
    'categoria' => '',
    'preco' => '',
    'estado' => ''
);

if (isset($_GET['filtros'])) {
    $filtros = $_GET['filtros'];
    // print_r($filtros);
    // exit;
    // ?filtros[categoria]=
    // &filtros[preco]=
    // &filtros[estado]=

}

$total_anuncios = $a->totalAnuncios($filtros);
$total_usuarios = $u->totalUsuarios();

$p = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = $_GET['p'];
}
$por_pagina = 2;
$total_paginas = ceil( $total_anuncios / $por_pagina );

$anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
$categorias = $c->getLista();
?>

    <div class="container">

        <div class="jumbotron bg-info p20">
            <h1>Temos hoje <?=$total_anuncios;?> anúncios</h1>
            <p>e mais de <?=$total_usuarios;?> usuários cadastrados</p>
        </div>

        <br>

        <div class="row">
            <div class="col-4">
                <h4>Pesquisa avançada</h4>

                <form action="" method="GET">
                    <div class="form-group">
                        categorias
                        <br>
                        <select name="filtros[categoria]" class='form-control'>
                            <option value=""></option>
                            <?php foreach ($categorias as $categoria): ?>
                            <option value="<?=$categoria['id'];?>" <?=($filtros['categoria']==$categoria['id'])?'selected="selected"':'';?>><?=$categoria['nome'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        preço
                        <br>
                        <select name="filtros[preco]" class='form-control'>
                            <option value="" <?=($filtros['preco']=='')?'selected="selected"':'';?>></option>
                            <option value="0-50" <?=($filtros['preco']=='0-50')?'selected="selected"':'';?>>0 a 50</option>
                            <option value="51-200" <?=($filtros['preco']=='51-200')?'selected="selected"':'';?>>51 a 200</option>
                            <option value="201-600" <?=($filtros['preco']=='201-600')?'selected="selected"':'';?>>201 a 600</option>
                            <option value="601-99000" <?=($filtros['preco']=='601-99000')?'selected="selected"':'';?>>601 +</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        estado de conservação
                        <br>
                        <select name="filtros[estado]" class='form-control'>
                            <option value="" <?=($filtros['estado']=='')?'selected="selected"':'';?>></option>
                            <option value="0" <?=($filtros['estado']=='0')?'selected="selected"':'';?>>ruim</option>
                            <option value="1" <?=($filtros['estado']=='1')?'selected="selected"':'';?>>bom</option>
                            <option value="2" <?=($filtros['estado']=='2')?'selected="selected"':'';?>>ótimo</option>
                        </select>
                    </div>
                    <br>

                    <input type="submit" value="Buscar">
                </form>

            </div>
            <div class="col-8">
                <h4>Últimos anúncios</h4>

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</td>
                        <th scope="col">First</td>
                        <th scope="col">Last</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($anuncios as $anuncio):                             
                            if (empty($anuncio['url'])) {
                                $anuncio['url'] = "default.png";
                            }
                        ?>
                        <tr>
                            <td>
                                <img src="assets/images/anuncios/<?=$anuncio['url'];?>" alt="" width="50">
                            </td>
                            <td>
                                <a href="produto.php?id=<?=$anuncio['id'];?>"><?=$anuncio['titulo'];?></a>
                                <br>
                                <?=$anuncio['categoria'];?>
                                <br>
                                Conservação: <?=$anuncio['estado'];?>
                            </td>
                            <td>R$ <?=number_format($anuncio['valor'], 2);?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php for ($q=1; $q <= $total_paginas; $q++): ?>
                        <li class="page-item <?=($p == $q)?'active':'';?>">
                            <a class="page-link" href="index.php?p=<?=$q;?>"><?=$q;?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
                
            </div>
        </div>


    </div>

<?php require 'pages/footer.php';?>
