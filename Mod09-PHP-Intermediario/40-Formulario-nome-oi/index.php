<?php
session_start();
?>
< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>

<h2>Qual seu nome?</h2>
<form action="" method="post">
    <input type="text" name="nome" />
    <input type="submit" value="Enviar">
</form>

<?php

if(count($_POST) > 0){

    if (!empty($_POST['nome'])) {

        echo "Olá <strong>".$_POST['nome']."</strong>";
        if (!empty($_SESSION['apelo'])) {
 
            echo $_SESSION['apelo'];
            $_SESSION['apelo'] = '';
 
        } else {
 
            echo "  <h3>:)</h3> ";
 
        }

    } else {
        
        echo "<strong>:/</strong>   Digite seu nome para que eu possa te cumprimentar";
        $_SESSION['apelo'] = ';)  Agora sim! \o/';

    }

}

?>