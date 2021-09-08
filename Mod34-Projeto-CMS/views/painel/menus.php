<h1>Menus</h1>

<a href="<?=BASE;?>painel/menus_add">Adicionar menu</a><br><br>

<table border=0 width=100% class=listagem-admin>
    <tr>
        <th width=50>id</th>
        <th>nome</th>
        <th>url</th>
        <th>ações</th>
    </tr>
    <?php foreach($menus as $menu): ?>
    <tr>
        <td><?=$menu['id'];?></td>
        <td><?=$menu['nome'];?></td>
        <td><?=$menu['url'];?></td>
        <td>
        <a href="<?=BASE;?>painel/menus_edit/<?=$menu['id'];?>">editar</a>
        -
        <a href="<?=BASE;?>painel/menus_del/<?=$menu['id'];?>">excluir</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>