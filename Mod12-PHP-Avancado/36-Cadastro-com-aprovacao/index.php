<?php
require 'config.php';

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    require 'config.php';
    $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->execute();
    $id = $pdo->lastInsertId();
    
    $md5 = md5($id);
    $pdo->query("UPDATE usuarios SET hash = '$md5' WHERE id = $id");
    $link = "http://www.site.com/cadastroconfirma/confirmar.php?h=".$md5;

    $assuto = "Subject: confirme seu cadastro";
    $msg = "Click no link abaixo para confirmar seu cadastro: \n\n <br><br>";
    $headers = "FROM: email@email.com"."\r\n".
                "X-Mailer: PHP/".phpversion();

    // $mail($email, $assuto, $msg, $headers);
    // echo "<h2>Ok! Você receberá um email com o link para confirmar seu cadastro</h2>";
    // exit;

    echo "<h4> >>> Confirme seu cadastro: <br> <a href='confirmar.php?h=".$md5."'>".$md5."</a> </h4>";
    // $_SERVER['REQUEST_URI'] = /B7-PHP-Zero-Ao-Pro/Mod12-PHP-Avancado/36-Cadastro-com-aprovacao/
    // $_SERVER['HTTP_REFERER'] = http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod12-PHP-Avancado/

}

?>

< <a href="../leiame.html">leiame</a> / <a href="../">mod 12 avancado</a> / <a href="">reload</a>
<br><br>

<form action="" method="post">
    Nome <br>
    <input type="text" name="nome" />
    <br><br>
    E-mail <br>
    <input type="email" name="email" />
    <br><br>
    <button>Cadastrar</button>
</form>

<hr>
<h3>Cadastrados</h3>
<table>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>status</th>
        <th>hash</th>
        <th><a href="desaprovar.php?a=0" class="desaprovar">Desaprovar <br> todos</a></th>
        <th><span>\o/</span></th>
        <th><a href="desaprovar.php?a=1" class="aprovar">Aprovar <br> todos</a></th>
    </tr>
<?php
$sql = $pdo->query("SELECT * FROM usuarios ORDER BY id DESC");
if ($sql->rowCount() > 0): 
    foreach($sql->fetchAll() as $user):

        // Atualizando o hash para md5
        // if ($user['status'] == 0) {
        //     $pdo->query("UPDATE usuarios SET hash = MD5($user[id]) WHERE id = $user[id]");
        // }

        // echo '<pre>';
        // print_r($user);
        // Array
        // (
        //     [id] => 1
        //     [0] => 1
        //     [nome] => jorge
        //     [1] => jorge
        //     [email] => jorge@email.com
        //     [2] => jorge@email.com
        //     [status] => 0
        //     [3] => 0
        //     [hash] => 0
        //     [4] => 0
        // )
?>
    <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['nome']?></td>
        <td><?=$user['email']?></td>
        <td class="tac <?php echo ($user['status'] == 0) ? 'status-aprovar' : 'status-aprovado'; ?>"><?=$user['status']?></td>
        <td><?=$user['hash']?></td>
        <td>
            <a href="excluir.php?id=<?=$user['id']?>" class="excluir">excluir</a>
        </td>
        <td>
            <?php if($user['status'] == 1): ?>
                <a href="editar.php?id=<?=$user['id']?>" class="editar">editar</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($user['status'] != 1): ?>
                <a href="confirmar.php?h=<?=$user['hash']?>" class="aprovar">aprovar</a>
            <?php endif; ?>
        </td>
    </tr>
<?php 
    endforeach;
else: ?>
    <tr>
        <td colspan=6>Nenhum usuário cadastrado</td>
    </tr>
<?php
endif;
?>
</table>
<style>
    * {font-family: sans-serif;}
    table td {padding: 5px;background-color: #ddd;}
    th {text-transform: uppercase;}
    th a,
    th span { text-transform: capitalize; font-weight: normal; text-decoration: none;}
    th span { text-transform: none;}
    .tac {text-align: center;}
    .desaprovar,
    .excluir,
    .aprovar,
    .editar { display: inline-block;padding: 3px 6px;text-decoration: none; min-width: 80px;text-align: center; }
    .desaprovar,
    .excluir {background: #f00;color: #fff;}
    .aprovar {background: #000;color: #0f0;}
    .editar {background: #00f;color: #fff;}
    .status-aprovar {background: #0f0;}
    .status-aprovado {}
</style>
