<?php
require_once 'config.php';
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $id = $sql['id'];
        $token = md5(time().rand(0,999).rand(0,999));

        $sql = "INSERT INTO usuarios_token
                    (id_usuario, hash, expirado_em)
                    VALUES
                    (:id_usuario, :hash, :expirado_em)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_usuario', $id);
        $sql->bindValue(':hash', $token);
        $sql->bindValue(':expirado_em', date("Y-m-d H:i"), strtotime('+2 months'));
        $sql->execute();

        // $link = "http://www.seusite.com/redefinir.php?token=".$token;
        $link = "<br>
                 <a href='http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod12-PHP-Avancado/37-Esqueci-senha/redefinir.php?token=".$token."'>
                    http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod12-PHP-Avancado/37-Esqueci-senha/redefinir.php?token=".$token."</a>";

        // echo "Acesse seu e-mail e clique no link para redefinir sua senha.";
        $mensagem = "Acesse seu e-mail e clique no link para redefinir sua senha: <br><br>".$link;
        $assunto = "Redefinir sua senha";
        $headers = 'From: seuemail@site.com' . '\n\r' .
                   'X-Mailer: PHP/'.phpversion();

        // mail($email, $assunto, $mensagem, $headers);

        echo $mensagem;
        exit;

    }
}
?>
< <a href="">reload</a> / <a href="index.php">Home</a>
<br><br>
<form action="" method="post">
    Qual seu e-mail: <br>
    <input type="email" name="email" />
    <br>
    <br>
    <button>Enviar</button>
</form>
