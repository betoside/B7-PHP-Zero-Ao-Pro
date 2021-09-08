<h1>Páginas</h1>
<table border=0 width=100% class=listagem-admin>
    <tr>
        <th width=50>id</th>
        <th>titulo</th>
        <th>ações</th>
    </tr>
    <?php foreach($paginas as $pagina): ?>
    <tr>
        <td><?=$pagina['id'];?></td>
        <td><?=$pagina['titulo'];?></td>
        <td></td>
    </tr>

    <?php endforeach; ?>
</table>