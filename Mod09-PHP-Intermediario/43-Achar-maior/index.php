< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>achar o maior</h2>
<?php

$numeros = [50,30,60,99,1,4,6,89,125,77];

echo '$numeros: array[';
echo implode(',', $numeros);
echo '];';
echo '<br>';
echo 'Maior: ' . max($numeros);
?>