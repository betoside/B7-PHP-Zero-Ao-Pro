< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>
    #5: Funções de Data e Tempo #1
    <br>
    #6: Funções de Data e Tempo #2
    <br>
    date(), time(), mktime(), strtotime()
</h2>

<h4>date('d-m-Y \à\s h:m:i')</h4>
<?php
$dataAtual = date('d-m-Y \à\s h:m:i');
echo '$dataAtual: '.$dataAtual;
echo '<br>';
echo '<hr>';
?>


<h4>time(): int</h4>
<?php
$tempoEmSegundos = time();
echo '$tempoEmSegundos: '.$tempoEmSegundos;
echo '<br>';
echo '<hr>';
?>


<h4>mktime(hora, minuto, segundo, mes, dia, ano, is_dst): int</h4>
<pre>
    mktime(
        int $hour = date("H"),
        int $minute = date("i"),
        int $second = date("s"),
        int $month = date("n"),
        int $day = date("j"),
        int $year = date("Y"),
        int $is_dst = -1
    ): int


    $segundosAgora = time();
    $segundosBetao = mktime(0, 0, 0, 11, 4, 1974);
    $segundosGu = mktime(0, 0, 0, 9, 16, 2011);
    $segundosKa = mktime(0, 0, 0, 7, 12, 2003);
    echo '$segundosAgora: '.$segundosAgora.' - '.date('d/m/Y', $segundosAgora);
    echo '$segundosBetao: '.$segundosBetao.' - '.date('d/m/Y', $segundosBetao);
    echo '$segundosKa: '.$segundosKa.' - '.date('d/m/Y', $segundosKa);
    echo '$segundosGu: '.$segundosGu.' - '.date('d/m/Y', $segundosGu);

</pre>
<?php
$segundosAgora = time();
$segundosBetao = mktime(0, 0, 0, 11, 4, 1974);
$segundosGu = mktime(0, 0, 0, 9, 16, 2011);
$segundosKa = mktime(0, 0, 0, 7, 12, 2003);
echo '$segundosAgora: '.$segundosAgora.' - '.date('d/m/Y', $segundosAgora);
echo '<br>';
echo '$segundosBetao: '.$segundosBetao.' - '.date('d/m/Y', $segundosBetao);
echo '<br>';
echo '$segundosKa: '.$segundosKa.' - '.date('d/m/Y', $segundosKa);
echo '<br>';
echo '$segundosGu: '.$segundosGu.' - '.date('d/m/Y', $segundosGu);
echo '<hr>';
?>

<h4>strtotime(string $time, int $now = ?): int</h4>
<?php
echo 'now: ' . strtotime("now"), "\n" . '<br>';
echo '10 September 2000: ' . strtotime("10 September 2000"), "\n" . '<br>';
echo '+1 day: ' . strtotime("+1 day"), "\n" . '<br>';
echo '+1 week: ' . strtotime("+1 week"), "\n" . '<br>';
echo '+1 week 2 days 4 hours 2 seconds: ' . strtotime("+1 week 2 days 4 hours 2 seconds"), "\n" . '<br>';
echo 'next Thursday: ' . strtotime("next Thursday"), "\n" . '<br>';
echo 'last Monday: ' . strtotime("last Monday"), "\n" . '<br>';

echo "date('d/m/Y', 0): ".date('d/m/Y', 0)." // passei 0 na qtd de segundos"; // passei 0 na qtd de segundos
echo '<br>';
echo '1 <b>dia</b> tem <b>'.strtotime("+1 day", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 day", 0 ));
echo '<br>';
echo '1 <b>semana</b> tem <b>'.strtotime("+1 week", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 week", 0 ));
echo '<br>';
echo '1 <b>mês</b> tem <b>'.strtotime("+1 month", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 month", 0 ));
echo '<br>';
echo '1 <b>trimestre</b> tem <b>'.strtotime("+3 months", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+3 months", 0 ));
echo '<br>';
echo '1 <b>semestre</b> tem <b>'.strtotime("+6 months", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+6 months", 0 ));
echo '<br>';
echo '1 <b>ano</b> tem <b>'.strtotime("+1 year", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 year", 0 ));
?>

<pre>

    echo 'now: ' . strtotime("now");
    echo '10 September 2000: ' . strtotime("10 September 2000");
    echo '+1 day: ' . strtotime("+1 day");
    echo '+1 week: ' . strtotime("+1 week");
    echo '+1 week 2 days 4 hours 2 seconds: ' . strtotime("+1 week 2 days 4 hours 2 seconds");
    echo 'next Thursday: ' . strtotime("next Thursday");
    echo 'last Monday: ' . strtotime("last Monday");

    echo "date('d/m/Y', 0): ".date('d/m/Y', 0)." // passei 0 na qtd de segundos"; // passei 0 na qtd de segundos
    echo '1 <b>dia</b> tem <b>'.strtotime("+1 day", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 day", 0 ));
    echo '1 <b>semana</b> tem <b>'.strtotime("+1 week", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 week", 0 ));
    echo '1 <b>mês</b> tem <b>'.strtotime("+1 month", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 month", 0 ));
    echo '1 <b>trimestre</b> tem <b>'.strtotime("+3 months", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+3 months", 0 ));
    echo '1 <b>semestre</b> tem <b>'.strtotime("+6 months", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+6 months", 0 ));
    echo '1 <b>ano</b> tem <b>'.strtotime("+1 year", 0 ).'</b> segundos: '.date('d/m/Y', strtotime("+1 year", 0 ));

</pre>

Mais testes:
<br>
<?php
echo "date('d/m/Y'): ". date('d/m/Y');
echo '<br>';

echo "time(): ". time();
echo '<br>';

echo "date('d/m/Y', time()): ". date('d/m/Y', time());
echo '<br>';

echo "strtotime('now'): ". strtotime('now');
echo '<br>';

