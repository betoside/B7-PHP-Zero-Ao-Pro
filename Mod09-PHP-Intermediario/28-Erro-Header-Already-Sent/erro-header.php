<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Página 1</h1>
    <form method="POST">
        Digite "teste" para passar:
        </br></br>
        <input type="text" name="codigo" />
        </br></br>
        <input type="submit" value="enviar" />
        </br></br>
    </form>
    
</body>
</html>


<?php 
if(!empty($_POST['codigo'])){

    $codigo = $_POST['codigo'];

    // fsd();
    // str_replace();

    if($codigo == 'teste'){

        // echo "erro";

        header("location: pagina2.php");

    } else {

        echo "Acesso negado";

    }
}
?>
