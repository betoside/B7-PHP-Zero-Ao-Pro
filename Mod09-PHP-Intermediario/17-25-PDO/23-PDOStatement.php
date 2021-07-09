<title>23: PDO: PDOStatement</title>
<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = 'Alberto';
    $id = 1;

    $sql = " UPDATE usuarios SET nome = :novonome WHERE id = :id ";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    echo "Usuário ATUALIZADO com sucesso.";

} catch (PDOException $e) {

    echo "Error: ".$e->getMessage();

}
