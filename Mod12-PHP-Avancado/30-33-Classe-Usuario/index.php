< <a href="../">mod 12 php avançado</a> / 
<br><br>
<?php
require_once 'usuarios.php';

// $usuario = new Usuarios();
// $res = $usuario->setNome('Cesar Xavier');
// $res = $usuario->setEmail('cesar@email.com');
// $res = $usuario->setSenha('123');
// $res = $usuario->salvar('');
// echo 'Usuario criado com sucesso';

// $usuario = new Usuarios(12);
// echo 'Meu nome é: '.$usuario->getNome();
// echo '<br>';
// // $usuario->setNome('Henrique Banana');
// $usuario->setNome('Eneas');
// $res = $usuario->salvar();
// echo 'Meu nome é: '.$usuario->getNome();
// echo '<br>';

$usuario = new Usuarios(12);
$usuario->delete();
echo 'Usuário excluído com sucesso';
echo '<br>';

// echo '<pre>';
// print_r($res);
// echo '</pre>';
// echo '<hr>';

