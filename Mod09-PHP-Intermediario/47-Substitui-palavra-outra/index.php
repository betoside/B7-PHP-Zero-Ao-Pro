< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #47: Exercício: Substitui uma palavra por outra na frase
    <br>
    47-Substitui-palavra-outra
</h2>

<br>

<style>
    input { min-width: 350px;}
</style>

<form action="" method="post">
    Frase: <br>
    <input type="text" name="frase" required>
    <br><br>

    Procurar por: <br>
    <input type="text" name="de" required>
    <br><br>

    Trocar por: <br>
    <input type="text" name="para" required>
    <br><br>

    <button>ordenar</button>
</form>

<?php

if (!empty($_POST['frase'])) {

    $frase = $_POST['frase'];
    $de = $_POST['de'];
    $para = $_POST['para'];
    $novaFrase = str_replace($de, '<strong>'.$para.'</strong>', $frase);

    $frase = str_replace($de, '<strong>'.$de.'</strong>', $frase);
    echo 'De: '.$frase;
    echo '<br>';
    echo 'Para: '.$novaFrase;

}

?>