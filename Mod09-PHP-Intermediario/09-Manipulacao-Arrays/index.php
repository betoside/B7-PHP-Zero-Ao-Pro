< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #9: Manipulação de Arrays   
    <br>
    array_keys(), array_values(), array_pop(), array_shift(),
    asort(), arsort(), count(), in_array()

</h2>
<pre>
$pessoa = array(
    'nome' => 'Chokito',
    'idade' => 20,
    'cidade' => 'sao paulo',
    'pais' => 'brasil'
);
</pre>
<?php
$pessoa = array(
    'nome' => 'Chokito',
    'idade' => 20,
    'cidade' => 'sao paulo',
    'pais' => 'brasil'
);

echo '<hr>';
echo 'array_keys(): ';
echo '<pre>';
print_r(array_keys($pessoa));
echo '</pre>';

echo '<hr>';
echo 'array_values(): ';
echo '<pre>';
print_r(array_values($pessoa));
echo '</pre>';

echo '<hr>';
echo 'array_pop(): ';
echo '<pre>';
print_r(array_pop($pessoa));
echo '<br><br>';
print_r($pessoa);
echo '</pre>';

echo '<hr>';
echo 'array_shift(): ';
echo '<pre>';
print_r(array_shift($pessoa));
echo '<br><br>';
print_r($pessoa);
echo '</pre>';

$pessoa = array(
    'nome' => 'Chokito',
    'idade' => 20,
    'cidade' => 'sao paulo',
    'pais' => 'brasil'
);

echo '<hr>';
echo 'asort(): ';
asort($pessoa);
echo '<pre>';
echo '<br>';
print_r($pessoa);
echo '</pre>';

$cadastro = array(
    'Jose',
    'joao',
    'pedro',
    'manoel',
    'bruno',
    'ferreira'
);
echo '<hr>';
echo '<pre>';
print_r($cadastro);
echo '</pre>';
echo '<br>';

echo 'sort()';
sort($cadastro);
echo '<pre>';
print_r($cadastro);
echo '</pre>';
echo '<br>';

echo 'asort()';
asort($cadastro);
echo '<pre>';
print_r($cadastro);
echo '</pre>';
echo '<br>';

echo 'arsort()';
arsort($cadastro);
echo '<pre>';
print_r($cadastro);
echo '</pre>';
echo '<br>';
echo '<hr>';

echo 'count($cadastro): '. count($cadastro);
echo '<hr>';

echo 'in_array()';
echo '<br>';
// echo in_array('Bruno', $cadastro);
echo '<br>';
// echo 'in_array("Bruno", $cadastro): '. in_array('Bruno', $cadastro);
echo '<hr>';
if(in_array('bruno', $cadastro)){
    echo 'in_array("Bruno", $cadastro): ';
} else {
    echo 'Não existe "Bruno", sim "bruno"';
}