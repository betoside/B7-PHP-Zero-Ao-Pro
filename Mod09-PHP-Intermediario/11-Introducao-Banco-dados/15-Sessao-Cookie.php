<?php

session_start();

$_SESSION['teste'] = 'alberto';
// $_SESSION['QUALQUER COISA'] = 'outra informacao';
// $_SESSION['outroNome'] = 'outro informacao';

echo "Sessao foi feita";
echo "<br>";
echo "Meu nome é " . $_SESSION['teste'];
echo "<br>";
echo "<br>";

// setcookie("testeCookie", "Fulano de Tal", time()+3600);
// time() pega a data atual em segundos
// time()+3600 = daqui a 1 hora
// echo "Cookie setado com sucesso";
echo "Meu cookie é de: " . $_COOKIE['testeCookie'];
echo "<br>";
echo "<br>";

?>

<pre>    
Session, 
    
    as informacoes ficam no servidor
    as informacoes podem ser passadas entre as paginas do sistema
    
    $_SESSION['teste'] = 'alberto';
    $_SESSION['QUALQUER COISA'] = 'outra informacao';
    $_SESSION['outroNome'] = 'outro informacao';


Cookie,
    
    as informacoes ficam no browser do client

    setcookie("testeCookie", "Fulano de Tal", time()+3600);
    time() pega a data atual em segundos
    time()+3600 = daqui a 1 hora
    echo "Cookie setado com sucesso";
    
    echo "Meu cookie é de: " . $_COOKIE['testeCookie'];

</pre>