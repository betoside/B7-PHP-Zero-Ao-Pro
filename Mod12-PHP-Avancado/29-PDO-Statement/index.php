< <a href="../">mod 12 php avançado</a> / 
<br><br>
<?php
require_once 'usuarios.php';
$u = new Usuarios();
echo 'users';
$res = $u->selecionarPorId(1);

echo '<pre>';
print_r($res);
echo '</pre>';
echo '<hr>';

// $u->inserir("Filipe","filipe@email.com","123");
// echo 'added';

// $u->atualizar('Hordac', 'hordac@email', 'teste', 11);
// echo 'Atualizado';

$u->excluir(11);
echo 'Exclusão';
