<h1>Adicionar página</h1>
<form action="" method="post">
    Título da página: <br>
    <input type="text" name="titulo"><br><br>

    URL da página: <br>
    <input type="text" name="url"><br><br>


    Criar menu automaticamente: <br>
    <input type="checkbox" name="add_menu"><br><br>


    Corpo da página: <br>
    <textarea name="corpo" id="corpo" cols="60" rows="10"></textarea><br><br>

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