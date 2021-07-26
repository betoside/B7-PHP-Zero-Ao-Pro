< <a href="../../">php</a> / <a href="../leiame.html">leiame</a> / <a href="../">Módulo 16 php super avançado</a>
<br><br>
<?php
spl_autoload_register(function ($class){
    
    require 'classes/'.$class.'.php';

});

// require 'Cavalo.php';
$cavalo = new Cavalo();
$cavalo->relinchar();

// require 'Pessoa.php';
$pessoa = new Pessoa();
$pessoa->saudar();