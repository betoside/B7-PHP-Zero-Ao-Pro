<?php require 'pages/header.php';?>
<div class="container">

    <h1>Login</h1>
    <?php 
        require_once 'classes/usuarios.class.php';
        $u = new Usuarios();
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            if ($u->login($email, $senha)) {
                ?>
                <script>
                    window.location.href="./";
                </script>
                <?php
            } else {
                ?>
                <div class="alert alert-danger">
                    Usuário e/ou senha errados
                </div>
                <?php
            }
            
        }

    ?>

    <form action="" method="POST">
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
        <input type="submit" class="btn btn-secondary" value="Fazer login">

    </form>

</div>

<?php require 'pages/footer.php';?>
