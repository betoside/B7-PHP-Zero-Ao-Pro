<title>22 DELETE</title>
<?php

$dsn = "mysql:dbname=zeroAoPro_blog;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    // testador@email.com / 123

    $sql = " DELETE FROM usuarios WHERE email = 'testador@email.com' ";

    $sql = $pdo->query($sql);
    
    echo "EXCLUÍDO com sucesso.";

} catch (PDOException $e) {

    echo "Error: ".$e->getMessage();

}
