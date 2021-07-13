<?php
session_start();

$n1 = rand(0, 10);
$n2 = rand(0, 10);
$_SESSION['v'] = $n1 + $n2;

?>

<style>
    * {font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;}
    select,
    input {padding: 5px;}
    select { font-weight: bold;font-size: 20px;}
</style>

<a href="../">< Raiz Módulo 09</a>
<br><br>

<h3>verificador de humanos</h3>

<form action="verificador.php" method="post">
    <?php echo $n1; ?> + <?php echo $n2; ?>
    <input type="number" name="n" />
    <input type="submit" value="Calcular">
</form>