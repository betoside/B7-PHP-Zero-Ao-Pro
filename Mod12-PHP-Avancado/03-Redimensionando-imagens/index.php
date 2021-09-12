<?php

$arquivo = 'carrossel-home-1.jpg';
// $arquivo = 'Screen Shot 2021-05-12 at 00.06.41.png';

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;
// echo $ratio;

if ( $largura / $altura > $ratio ) {
    $largura = $altura * $ratio;
} else {
    $altura = $largura / $ratio;
}
// temos a nova largura ou nova altura que a imagem tem que ter 
echo 'L: '.$largura .'. (Largura original: '.$largura_original.')';
echo '<br>';
echo 'H: '.$altura .'. (Altura original: '.$altura_original.')';

$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefromjpeg($arquivo);
// $imagem_original = imagecreatefrompng($arquivo);

imagecopyresampled(
    $imagem_final, 
    $imagem_original, 
    0, 0,
    0, 0,
    $largura, $altura,
    $largura_original, $altura_original
);

// header('Content-Type: image/jpeg');
imagejpeg($imagem_final, 'teste.jpg', 70);
// imagepng($imagem_final, 'mini_imagem.png');


