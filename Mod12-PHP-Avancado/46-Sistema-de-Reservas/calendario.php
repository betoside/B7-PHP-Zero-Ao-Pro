<?php
// $data = $_GET['ano']."-".$_GET['mes']; // '2017-02';
// $dia1 = date('w', strtotime($data."-01"));
// $dias = date('t', strtotime($data));
// $linhas = ceil(($dia1 + $dias) / 7); // = quantidade de semanas 
// $dia1 = -$dia1; // transformar em nro negativo para descobrir o dia da semana
// $data_inicio = date('Y-m-d', strtotime($dia1.'days', strtotime($data)));
// $data_fim = date('Y-m-d', strtotime(($dia1 + ($linhas * 7) - 1).'days', strtotime($data)));
// echo "Primeiro dia/mes dia da semana: ".$dia1."<br>";
// echo "Total de dias no mês: ".$dias."<br>";
// echo "Total de semanas no mês (linhas): ".$linhas."<br>";
// echo "Data inicio: ".$data_inicio."<br>";
// echo "Data fim: ".$data_fim."<br>";
?>

<style>
    * {font-family: sans-serif;}
    .calendario td {background: #abc; padding: 5px;vertical-align: top;}
</style>
<table class="calendario">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php for($l=0;$l<$linhas;$l++): ?>
        <tr>
            <?php for($q=0;$q<7;$q++): ?>
            <?php $w = date(
                'Y-m-d', strtotime(($q+($l*7)).' days', strtotime($data_inicio))); ?>
            <td>
                <?php
                echo "<strong>".$w ."</strong><br><br>";
                $w = strtotime($w);

                foreach($lista as $item){
                    $dr_inicio = strtotime($item['data_inicio']); // dr = data de reserva
                    $dr_fim = strtotime($item['data_fim']);

                    if ($w >= $dr_inicio && $w <= $dr_fim) {
                        echo $item['pessoa']." (".$item['id_carro'].")<br>";
                    }
                }
                ?>
            </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>