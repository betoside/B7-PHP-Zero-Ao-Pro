<h1>Páginas</h1>

<a href="<?=BASE;?>painel/pagina_add">Adicionar página</a><br><br>


<table border=0 width=100% class=listagem-admin>
    <tr>
        <th width=50>id</th>
        <th>url</th>
        <th>titulo</th>
        <th>ações</th>
    </tr>
    <?php foreach($paginas as $pagina): ?>
    <tr>
        <td><?=$pagina['id'];?></td>
        <td><?=$pagina['url'];?></td>
        <td><?=$pagina['titulo'];?></td>
        <td>
            <a href="<?=BASE;?>painel/pagina_edit/<?=$pagina['id'];?>">editar</a>
            -
            <a href="<?=BASE;?>painel/pagina_del/<?=$pagina['id'];?>">excluir</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>