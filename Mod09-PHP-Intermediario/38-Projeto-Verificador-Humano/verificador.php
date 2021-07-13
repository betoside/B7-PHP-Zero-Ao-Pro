<?php
session_start();

if (!empty($_POST['n'])) {
    
    $n = intval($_POST['n']);

    if ($_SESSION['v'] == $n) {
        echo '<h1>HUMANO</h1>';
    } else {
        echo '<h1>FAKE</h1>';
    }

} else {
    header('location: index.php');
    exit;
}
?>
<br>
< <a href="javascript:;" onClick="history.go(-1)">Voltar</a>
