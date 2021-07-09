<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    // echo "* Conexão: Sucesso, it works";
    $sql = "SELECT * FROM usuarios WHERE email = 'qualquer@email.com'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $usuario){ // foreach vai pegar cada resultado e inserir no array $usuario
            echo "<strong>Nome</strong>: ".$usuario['nome'].", ".$usuario['email']."<br>";
        }
    } else {
        echo "Não há resultados retornados do BD.";
    }
    

} catch (PDOException $e) {

    echo "Error: ".$e->getMessage();

}

/*
definir parametros basicos
    mysql:              = tipo do banco de dados
    dbname;             = nome do banco de dados
    host/server;        = servidor
    user
    pass

    ===

    localhost
    Port	8889
    Username	root
    Password	root
*/