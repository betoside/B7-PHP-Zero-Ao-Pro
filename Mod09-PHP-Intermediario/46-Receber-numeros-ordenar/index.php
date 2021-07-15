< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>#46: Exercício: Receber números e ordenar</h2>

<style>
    .tabuada { border: 1px solid #000; border-collapse: collapse;}
    .tabuada td { border: 1px solid #ccc; text-align: center; padding: 5px;}
</style>

<form action="" method="post">
Digite números, quantos quiser:
<br>
<input type="text" name="numeros" class="numeros">
<button>ordenar</button>
</form>

<?php

if (isset($_POST['numeros'])) {
    $numeros = $_POST['numeros'];
    $numeros = explode(' ', $numeros);
    // echo $numeros;
    // exit;
    $ordenado = sort($numeros);

    echo '<pre>';
    print_r($numeros);
}

?>