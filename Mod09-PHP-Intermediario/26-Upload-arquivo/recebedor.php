<?php 
$arquivo = $_FILES['arquivo'];

// echo '<pre>';
// print_r($arquivo);
// Array
// (
//     [name] => alberto.png
//     [type] => image/png
//     [tmp_name] => /Applications/MAMP/tmp/php/phpb8cViy
//     [error] => 0
//     [size] => 126952
// )


if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {
    $extensao = explode('/', $arquivo['type']);
    $extensao = array_pop($extensao);
    // $extensao = array_shift($extensao);    
    // print_r($extensao);
    // exit;
    $nome = md5(time());
    move_uploaded_file($arquivo['tmp_name'], './'.$nome.'.'.$extensao);
    echo 'Arquivo enviado com sucesso! <br>';
    echo '<a href="index.php">Voltar</a>';

}

