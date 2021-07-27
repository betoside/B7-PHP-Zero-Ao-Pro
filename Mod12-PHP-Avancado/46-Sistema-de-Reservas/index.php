<?php
require 'config.php';
// require 'classes/carros.class.php';
require 'classes/reservas.class.php';

$reservas = new Reservas($pdo); // injecao de dependencia
// $carros = new Carros($pdo);
?>
<h1>Reservas</h1>
<a href="reservar.php">Adicionar Reserva</a> / <a href="">reload</a>
<br><br>

<form action="" method="get">
    <select name="ano">
        <?php for($q = date('Y'); $q <= 2030; $q++): ?>
            <option value="<?=$q;?>"><?=$q;?></option>
        <?php endfor; ?>
    </select>
    <select name="mes">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <button>Mostrar</button>
</form>

<?php
if (empty($_GET['ano'])) {
    exit;
}
?>
<!-- <hr> -->
<?php
$data = $_GET['ano']."-".$_GET['mes']; // '2017-02';
$dia1 = date('w', strtotime($data."-01"));
$dias = date('t', strtotime($data));
$linhas = ceil(($dia1 + $dias) / 7); // = quantidade de semanas 
$dia1 = -$dia1; // transformar em nro negativo para descobrir o dia da semana
$data_inicio = date('Y-m-d', strtotime($dia1.'days', strtotime($data)));
$data_fim = date('Y-m-d', strtotime(($dia1 + ($linhas * 7) - 1).'days', strtotime($data)));
// echo '$data_inicio: '. $data_inicio;
// echo '<br>';
// echo '$data_fim: '. $data_fim;
// exit;

$lista = $reservas->getReservas($data_inicio, $data_fim);

// foreach($lista as $item){
//     $data1 = date("d/m/Y", strtotime($item['data_inicio']));
//     $data2 = date("d/m/Y", strtotime($item['data_fim']));
//     echo $item['pessoa'] . 
//             " reservou o carro ".$item['id_carro'].
//             " entre ".$data1.
//             " e ".$data2."<br>";
// }
echo '<hr>';
include 'calendario.php';
?>