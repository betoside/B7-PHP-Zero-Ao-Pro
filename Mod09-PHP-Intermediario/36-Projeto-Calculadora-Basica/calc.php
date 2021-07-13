
< <a href="../">Raiz Módulo 09</a> / < <a href="index.php">index</a>
<br><br>

<?php

if (!empty($_GET['n1']) && !empty($_GET['op']) && !empty($_GET['n2'])) {

    // intval > transforma em numeros inteiros
    // floatval > transforma em numeros e aceita decimais

    $n1 = floatval($_GET['n1']);
    $op = $_GET['op'];
    $n2 = floatval($_GET['n2']);

    // echo 'op: '. $op;
    // exit;

    switch ($op) {
        case '-':
            $conta = $n1 - $n2;
            echo $n1." - ". $n2." = ".$conta;
            break;

        case '+':
            $conta = $n1 + $n2;
            echo $n1." + ". $n2." = ".$conta;
            break;

        case '/':
            $conta = $n1 / $n2;
            echo $n1." / ". $n2." = ".$conta;
            break;
            
        case '*':
            $conta = $n1 * $n2;
            echo $n1." * ". $n2." = ".$conta;
            break;
    }

} else {

    header('location: index.php');
    exit;

}