<?php
require_once 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($nome) && !empty($email) && !empty($senha)) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET 
        nome = '$nome',
        email = '$email',
        senha = '$senha'
    ";
    $pdo->query($sql);
    // header("Location: index.php");

}
//  else {
//     header("Location: index.php");
// }

header("Location: index.php");
