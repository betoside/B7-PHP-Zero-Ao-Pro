< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    <a href="#while">#1: WHILE</a>
    <br>
    <a href="#for">#2: FOR</a>
    <br>
    <a href="#foreach">#3: FOREACH</a>
    <br>
    <a href="#funcoes">#4: Funções</a>
    <br>
    01-04-while-for
</h2>

<hr>


<a name="while"></a>
<h1>#1: WHILE</h1>
<?php
$wh = 0;
while ($wh <= 10) {
    if ($wh < 10) {
        echo $wh.', ';
    } else {
        echo $wh;
    }
    $wh++;
}
?>
<pre>

$wh = 0;
while ($wh <= 10) {
    if ($wh < 10) {
        echo $wh.', ';
    } else {
        echo $wh;
    }
    $wh++;
}
</pre>

<hr>


<br>
    <a name="for"></a>
<h1>#2: FOR</h1>
<?php
for ($fo = 0; $fo <= 10; $fo++) {
    if ($fo < 10) {
        echo $fo.', ';
    } else {
        echo $fo;
    }
}
?>
<pre>
for ($fo = 0; $fo <= 10; $fo++) {
    if ($fo < 10) {
        echo $fo.', ';
    } else {
        echo $fo;
    }
}
</pre>

<hr>

<a name="foreach"></a>
<h1>#3: FOREACH</h1>
<p>listagem de arrays</p>
<?php
$esportes = ['corrida', 'surf', 'skate', 'futebol'];
$esportes2 = array('bicicleta', 'surf', 'skate', 'futebol');
foreach($esportes as $tipo){
    echo 'Esporte: '.$tipo.'<br>';
}

$pessoas = array(
    array('nome' => 'beto', 'assunto' => 'webdeveloper'),
    array('nome' => 'gustavo', 'assunto' => 'youtuber'),
    array('nome' => 'marina', 'assunto' => 'arte/produto'),
    array('nome' => 'kaiane', 'assunto' => 'veterinaria')
);
foreach ($pessoas as $pessoa) {
    echo 'Nome: '.$pessoa['nome'] .'. Assunto: '. $pessoa['assunto'].'<br>';
}

$aluno = [
    'nome' => 'Alberto',
    'idade' => 17,
    'estado' => 'SP',
    'pais' => 'Brasil'
];
foreach ($aluno as $key => $info) {
    echo $key .': '. $info . '<br>';
}
?>
<pre>
    
$esportes = ['corrida', 'surf', 'skate', 'futebol'];
$esportes2 = array('bicicleta', 'surf', 'skate', 'futebol');
foreach($esportes as $tipo){
    echo Esporte: .$tipo.'<br>';
}

$pessoas = array(
    array('nome' => 'beto', 'assunto' => 'webdeveloper'),
    array('nome' => 'gustavo', 'assunto' => 'youtuber'),
    array('nome' => 'marina', 'assunto' => 'arte/produto'),
    array('nome' => 'kaiane', 'assunto' => 'veterinaria')
);
foreach ($pessoas as $pessoa) {
    echo 'Nome: '.$pessoa['nome'] .'. Assunto: '. $pessoa['assunto'].'<br>';
}

$aluno = [
    'nome' => 'Alberto',
    'idade' => 17,
    'estado' => 'SP',
    'pais' => 'Brasil'
];
foreach ($aluno as $key => $info) {
    echo $key .': '. $info . '<br>';
}
</pre>

<hr>

<a name="funcoes"></a>
<h1>#4: Funções</h1>

<?php
function somar ($x, $y){
    $resultado = $x + $y;
    return $resultado;
}
$operacaoSoma = somar (27, 10);
echo '27 + 10 = ' . $operacaoSoma;
?>
<pre>

function somar ($x, $y){
    $resultado = $x + $y;
    return $resultado;
}
$operacaoSoma = somar (27, 10);
echo '27 + 10 = ' . $operacaoSoma;
</pre>