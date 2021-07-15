< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #48: Exercício: Sistema de sorteio 2:00
    <br>        
    48-Sistema-sorteio
</h2>

<br>
<h1>Sorteio</h1>

<?php

$arquivo = fopen ('lista.txt', 'r');
$lista = array();
while(!feof($arquivo)) {
    $linha = fgets($arquivo, 1024);
    // echo $linha.'<br />';
    $lista[] = $linha;
}
fclose($arquivo);

// echo '<pre>';
// print_r($lista);
// exit;

$numero = rand(0, (count($lista)-1));

echo "Sorteado: (". $numero . ') <strong style="font-size:22px">' . $lista[$numero] . '</strong>';