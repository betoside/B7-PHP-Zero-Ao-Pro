<?php
require_once 'config.php';

if (!empty($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT * FROM usuarios_token 
            WHERE hash = :hash 
            AND usado = 0 AND expirado_em > NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':hash', $token);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $id = $sql['id_usuario'];
        
        if (!empty($_POST['senha'])) {
            $senha = $_POST['senha'];

            $sql = "UPDATE usuarios 
                    SET senha = :senha
                    WHERE id = :id
                    ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':senha', md5($senha));
            $sql->bindValue(':id', $id);
            $sql->execute();

            $sql = "UPDATE usuarios_token
                    SET usado = 1
                    WHERE hash = :hash
                    ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':hash', $token);
            $sql->execute();

            echo '< <a href="">reload</a> / <a href="index.php">Home</a>';
            echo '<br>';
            echo '<br>';
            echo "MENSAGEM: Senha atualizada com sucesso";
            exit;

        }
 
        // echo "MENSAGEM: Token válido";
        ?>

        < <a href="">reload</a> / <a href="index.php">Home</a>
        <br><br>
        <form action="" method="post">
            Digite a nova senha: <br>
            <input type="password" name="senha" />
            <br>
            <br>
            <button>Atualizar senha</button>
        </form>


        <?php 
    } else {
 
        echo '< <a href="">reload</a> / <a href="index.php">Home</a>';
        echo '<br>';
        echo '<br>';
        echo "MENSAGEM: Token inválido";
 
    }

}