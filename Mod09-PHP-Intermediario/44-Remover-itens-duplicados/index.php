< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>remover itens duplicados</h2>
<?php

$numeros = [50,30,60,99,1,4,6,89,125,77,60,99,1,4,6];
$results = array_unique($numeros);

echo '<br>';
echo '<br>';
echo '$numeros: array[';
echo implode(',', $numeros);
echo '];';
echo '<br>';
echo '$results: array[';
echo implode(',', $results);
echo '];';
?>
<?php
$novoArray = array();
foreach ($numeros as $numero) {
    if (in_array($numero, $novoArray) == false) {
        $novoArray[] = $numero;
    }
}
echo '<br>';
echo '$novoarr: array[';
echo implode(',', $novoArray);
echo '];';

?>