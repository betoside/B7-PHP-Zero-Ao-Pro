<?php
if (isset($_FILES['arquivos'])) {
    // echo '<pre>';
    // print_r($_FILES);

    if ( count($_FILES['arquivos']['tmp_name']) > 0 ) {
        
        for($q=0;$q<count($_FILES['arquivos']['tmp_name']);$q++){

            $extensao = explode('/', $_FILES['arquivos']['type'][$q]);
            $extensao = array_pop($extensao);

            $nomeArquivo =  md5(time()).'.'.$extensao;

            move_uploaded_file($_FILES['arquivos']['tmp_name'][$q], './'.$nomeArquivo);

        }
        echo 'upload realizado com sucesso ';
    }

}
?>
<br><br>
<form method="post" enctype="multipart/form-data">

    <input type="file" name="arquivos[]" multiple>

    <br><br>

    <input type="submit" value="Enviar">

</form>