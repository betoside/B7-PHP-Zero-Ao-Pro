<form action="" method="post">
    E-mail: <br>
    <input type="email" name="email"><br><br>

    Senha: <br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Entrar">

    <?php
    if (!empty($erro)) {
        echo $erro;
    }
    ?>

</form>