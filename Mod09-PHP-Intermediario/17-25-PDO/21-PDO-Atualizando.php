<title>21 pdo UPDATE</title>
<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    // $NOVO_nome = "BetAo";
    // $NOVO_email = "betao_NOVO@email.com";
    // $NOVO_senha = md5("123");

    $novasenha = md5("teste");
    // betao_NOVO@email.com / 202cb962ac59075b964b07152d234b70
    // joao@email.com / teste
    // kaiane@email.com / teste
    // mercia@email.com / teste
    // gustavo@email.com / teste
    // testador@email.com / 123
    // $novasenha = md5("123");
    // regina@email.com / 202cb962ac59075b964b07152d234b70

    // $sql = " UPDATE usuarios SET nome = '$NOVO_nome', email = '$NOVO_email', senha = '$NOVO_senha'  WHERE email = 'beto@email.com' ";
    // $sql = " UPDATE usuarios SET senha = '$novasenha'  WHERE email = 'joao@email.com' ";
    $sql = " UPDATE usuarios SET senha = '$novasenha'  WHERE email = 'kaiane@email.com' ";
    // $sql = " UPDATE usuarios SET senha = '$novasenha'  WHERE email = 'mercia@email.com' ";
    // $sql = " UPDATE usuarios SET senha = '$novasenha'  WHERE email = 'gustavo@email.com' ";
    // $sql = " UPDATE usuarios SET senha = '$novasenha'  WHERE email = 'gustavo@email.com' ";
    // $sql = " UPDATE usuarios SET nome = '$NOVO_nome', email = '$NOVO_email', senha = '$NOVO_senha'  WHERE email = 'beto@email.com' ";
    // $sql = " UPDATE usuarios SET nome = '$NOVO_nome', email = '$NOVO_email', senha = '$NOVO_senha'  WHERE email = 'beto@email.com' ";

    $sql = $pdo->query($sql);
    
    echo "ATUALIZADO com sucesso.";

} catch (PDOException $e) {

    echo "Error: ".$e->getMessage();

}
