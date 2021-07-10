<?php
require_once 'config.php';
session_start();

if ( isset( $_SESSION['id'] ) && empty( $_SESSION['id'] ) == false  ) {
    ?>
    <p>
        <a href="../">< parent directory</a>
    </p>

    <?php
    echo '<hr>';
    echo 'Área restrita';
    echo '<hr>';
    echo '<br>';

    // exibir dados de quem logou
    $id = addslashes($_SESSION['id']);

    $sql = "SELECT * FROM usuarios WHERE id=".$id;
    $sql = $db->query($sql);
    $usuario = $sql->fetch();
    echo "ID: " . $usuario['id'];
    echo '<br>';
    echo "NOME: " . $usuario['nome'];
    echo '<br>';
    echo "EMAIL: " . $usuario['email'];
    echo '<br>';

} else {
    // echo 'Página de login';
    header('Location: login.php');
}
?>
<br><br>

<a href="logout.php">Logout</a>