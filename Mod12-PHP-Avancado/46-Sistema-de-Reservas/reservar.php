<?php
require 'config.php';
require 'classes/carros.class.php';
require 'classes/reservas.class.php';

$reservas = new Reservas($pdo); // injecao de dependencia
$carros = new Carros($pdo);


// $_POST['carro']
if (!isset($_POST['carro']) == false && !empty($_POST['carro'])) {

    $carro = $_POST['carro'];
    // echo '$_POST[\'data_inicio\']: ' . $_POST['data_inicio'];
    // echo '<br>';
    // echo '$_POST[\'data_fim\']: ' . $_POST['data_fim'];
    $data_inicio = explode("-", $_POST['data_inicio']);
    $data_fim = explode("-", $_POST['data_fim']);
    // echo '$data_inicio: ';
    // print_r($data_inicio);
    // echo '<br>';
    // echo '$data_fim: ';
    // print_r($data_fim);
    // exit;
    $pessoa = $_POST['pessoa'];

    $data_inicio = $data_inicio[0]."-".$data_inicio[1]."-".$data_inicio[2];
    $data_fim = $data_fim[0]."-".$data_fim[1]."-".$data_fim[2];
    // echo '$data_inicio: ';
    // print_r($data_inicio);
    // echo '<br>';
    // echo '$data_fim: ';
    // print_r($data_fim);
    // exit;

    // Duas Etapas: 1º verificar se tem a possibilidade de reserva
    if ($reservas->verificarPossibilidade($carro, $data_inicio, $data_fim)) {
        // Duas Etapas: 2ª reservar
        $reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
        header('Location: index.php');
        exit;
    } else {
        echo "Esse carro está reservado nesse período";
        echo '<br><br>';
    }



}
?>
< <a href="index.php">Home</a>
<br><br>
<h1>Adicionar Reserva</h1>

<form action="" method="post">
    Carro <br>
    <select name="carro">
        <?php
        $lista = $carros->getCarros();
        foreach($lista as $carro):
            ?>
            <option value="<?=$carro['id'];?>"><?=$carro['nome'];?></option>
            <?php
        endforeach;
        ?>
    </select>
    
    <br><br>

Data de início <br>
<input type="date" name="data_inicio">
<br><br>

Data de fim <br>
<input type="date" name="data_fim">
<br><br>

Nome da pessoa <br>
<input type="text" name="pessoa">
<br><br>

<button>Reservar</button>

</form>