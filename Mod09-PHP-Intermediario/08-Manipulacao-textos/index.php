< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #8: Manipulação de textos
    <br>
    explode(), implode(), number_format(),
    str_replace(), strtolower(), 
    substr(), ucfirst(), ucwords()

</h2>
<?php
$nome = "Maria Rosa Ferreira";
$nomeExplode = explode(' ', $nome);
print_r($nomeExplode);
echo '<hr>';

$voRosinha = implode(',', $nomeExplode);
echo $voRosinha;
echo '<hr>';

$numeroFormato = number_format(8.7531256, 2);
echo $numeroFormato;
echo '<hr>';

$numeroFormato = number_format(6549878.7531256, 2, ',', '.');
echo $numeroFormato;
echo '<hr>';

$numeroFormato = number_format(6549878.7531256, 2, ',', '');
echo $numeroFormato;
echo '<hr>';