<?php
// if (!empty($_POST['email'])) {
//     $nome = $_POST['nome'];
//     $email = $_POST['email'];

//     echo 'nome: '.$nome;
//     echo '<br>';
//     echo 'email: '.$email;
// }
?>
<h1>adicionar</h1>
< <a href="index.php">home</a> / <a href="">reload</a>
<br><br>
<form action="adicionar_submit.php" method="post">
<!-- <form action="" method="post"> -->
    Nome: <br>
    <input type="text" name="nome"> <br><br>

    Email: <br>
    <input type="email" name="email" required> <br><br>

    <button>Enviar</button>
</form>
