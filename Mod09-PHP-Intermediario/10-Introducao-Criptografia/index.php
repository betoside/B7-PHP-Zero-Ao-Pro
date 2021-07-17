< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #10: Introdução à Criptografia
    <br>
    md5(), irreversível
    <br>
    base64_encode() <a href="https://www.base64encode.org/" target="_blank">https://www.base64encode.org/</a>
</h2>
<h3>md5()</h3>
<?php
$nome = "Gustavo";
$nome2 = md5($nome);

echo '<b>nome original:</b> '.$nome;
echo '<br>';
echo '<b>nome criptografado, md5($nome):</b> '.$nome2;
?>


<h3>base64_encode()</h3>
<?php
$nome3 = base64_encode($nome);
$nome3decodificado = base64_decode($nome3);
echo '<b>nome original:</b> '.$nome;
echo '<br>';
echo '<b>nome3 criptografado, base64_encode($nome):</b> '.$nome3;
echo '<br>';
echo '<b>Texto original, base64_decode($nome3):</b> '.$nome3decodificado;
