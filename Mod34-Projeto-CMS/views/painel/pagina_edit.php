<h1>Editar página</h1>
<form action="" method="post">
    Título da página: <br>
    <input type="text" name="titulo" value="<?=$pagina['titulo'];?>"><br><br>

    URL da página: <br>
    <input type="text" name="url" value="<?=$pagina['url'];?>"><br><br>

    Corpo da página: <br>
    <textarea name="corpo" id="corpo" cols="60" rows="10"><?=$pagina['corpo'];?></textarea><br><br>

    <input type="submit" value="Salvar">
</form>
<script src="<?=BASE;?>ckeditor5-build-classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#corpo' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
