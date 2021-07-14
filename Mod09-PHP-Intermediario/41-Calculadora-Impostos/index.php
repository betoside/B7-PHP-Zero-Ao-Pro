< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>

<h2>Calculadora de imposto (decupar o valor)</h2>

<form action="" method="post">
    Valor do produto: <br>
    <input type="text" name="valor" />
    <br><br>

    Taxa de imposto (em %) <br>
    <input type="text" name="imposto" />
    <br><br>

    <!-- <input type="submit" value="Calcular"> -->
    <button>Calcular</button>
</form>

<?php

if (count($_POST) > 0) {

    $valorBRA = $_POST['valor'];
    $impostoBRA = $_POST['imposto'];

    $valorUSA = str_replace(',', '.', $_POST['valor']);
    $valorUSA = floatval($valorUSA);
    $impostoUSA = str_replace(',', '.', $_POST['imposto']);
    $impostoUSA = floatval($impostoUSA);
    // intval
    // floatval
    $imposto = $impostoUSA / 100; // %
    $valorImposto = $valorUSA * $imposto;
    $valorProduto = $valorUSA - $valorImposto;
    
    $valorImpostoBRA = str_replace('.', ',', $valorImposto);
    $valorProdutoBRA = str_replace('.', ',', $valorProduto);
    ?>

    <p>
        Valor do produto: <strong>R$ <?=$valorBRA;?></strong>
        <br>
        Valor de imposto: <strong>R$ <?=$impostoBRA;?></strong>
    </p>
    <hr>
    <p>
        Imposto: <strong>R$ <?=$valorImpostoBRA;?></strong>
        <br>
        Produto: <strong>R$ <?=$valorProdutoBRA;?></strong>
    </p>

    <?php
}
?>

