<?php require 'pages/header.php';?>
<div class="container">

    <h1>Cadastre-se</h1>
    <?php 
        require 'classes/usuarios.class.php';
        $u = new Usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
            $telefone = addslashes($_POST['telefone']);

            if (!empty($nome) && !empty($email) && !empty($senha)) {
                if ($u->cadastrar($nome, $email, $senha, $telefone)) {
                    ?>
                    <div class="alert alert-success">
                        Parabéns. Cadastrado com sucesso.
                        <a href="login.php">Faça login agora</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-warning">
                        Este usuário já existe.
                        <a href="login.php">Faça login agora</a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="alert alert-warning">
                    Preencha todos os campos
                </div>
                <?php
            }
            
        }

    ?>

    <form action="" method="POST">
        <div class="form-group mb-10">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <br>
        <div class="form-group mb-10">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <br>
        <div class="form-group mb-10">
            <label for="senha">Senha:</label>
            <input type="text" name="senha" class="form-control">
        </div>
        <br>
        <div class="form-group mb-10">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" class="form-control">
        </div>
        <br>
        <input type="submit" class="btn btn-secondary" value="Cadastrar">

    </form>

</div>

<?php require 'pages/footer.php';?>
