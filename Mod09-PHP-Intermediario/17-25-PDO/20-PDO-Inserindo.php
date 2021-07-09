<title>INSERT INTO</title>
<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Regina";
    $email = "regina@email.com";
    $senha = md5("123");

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);
    
    echo "User inserido com sucesso: id = " . $pdo->lastInsertId();

} catch (PDOException $e) {

    echo "Error: ".$e->getMessage();

}
