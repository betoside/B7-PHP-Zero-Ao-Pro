< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #49: Exercício: Função para inverter string
    <br>
    49-Funcao-inverter-string
</h2>
<h1>Inverter String</h1>
<form action="" method="post">
    Palavra / Frase: <br>
    <input type="text" name="palavra-frase" style="min-width:350px;">
    <button>Enviar</button>
</form>
<?php
/*
$_POST['palavra-frase']
*/ 
if (!empty($_POST['palavra-frase'])) {
    $palavra_frase = $_POST['palavra-frase'];
    $novaFrase = strrev($palavra_frase);
    echo $palavra_frase . '<br>';
    echo $novaFrase;
}