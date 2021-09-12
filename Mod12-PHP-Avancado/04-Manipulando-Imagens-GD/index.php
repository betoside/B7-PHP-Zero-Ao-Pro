<?php 

$imagem = 'frontside classic 80s sk8.jpg';

list($width_original, $height_original) = getimagesize($imagem);
list($width_guitar, $height_guitar) = getimagesize('guitar-pixel.png');

$imagem_final = imagecreatetruecolor($width_original, $height_original);

$imagem_original = imagecreatefromjpeg('frontside classic 80s sk8.jpg');
$imagem_guitar = imagecreatefrompng('guitar-pixel.png');

imagecopy(
    $imagem_final, $imagem_original,
    0, 0, 0, 0,
    $width_original, $height_original
);
imagecopy(
    $imagem_final, $imagem_guitar,
    -150, -150, 0, 0,
    $width_guitar, $height_guitar
);

// header('Content-Type: image/png');
// imagepng($imagem_final, null);
imagepng($imagem_final, 'imagem-mix.png');

echo 'imagem salva com sucesso <br>';
echo '<a href="imagem-mix.png">ver imagem</a>';