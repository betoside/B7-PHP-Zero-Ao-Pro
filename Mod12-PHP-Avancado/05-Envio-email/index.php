../ <a href="../">Mod12-PHP-Avancado</a> / <a href="">Reload</a>
<br>
<br>
Escolhor um Host
<br>
hospedar o arquivo
<br>
fazer o teste de email em ambiente real
<br><br>

<form action="" method="post">
    Nome <br>
    <input type="text" name="nome">
    <br><br>

    E-mail <br>
    <input type="text" name="email">
    <br><br>

    Mensagem <br>
    <textarea name="msg"></textarea>
    <br><br>

    <button>Enviar</button>
</form>
<br><br>

<?php
if(!empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "betoside@gmail.com";
    $assunto = "Aula de envio de e-mail B7web";
    $corpo = "Nome: ". $nome.". <br>Email: ".$email.". <br>Mensagem: ".$msg;
    $cabecalho = "From: betoside@gmail.com"."\r\n".
                    "Reply-to: ".$email."\r\n".
                    "X-Mailer: PHP/".phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    echo "<h2>Email enviado com sucesso.</h2>";
    exit;
}