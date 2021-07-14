< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>Mostrar / Gerar a tabuada</h2>

<style>
    .tabuada { border: 1px solid #000; border-collapse: collapse;}
    .tabuada td { border: 1px solid #ccc; text-align: center; padding: 5px;}
</style>

<table class="tabuada">
<?php
for($i=1;$i<11;$i++){
    echo '<tr>';
    // echo '  <td>'.$i.'</td>';

    for($j=1;$j<11;$j++){
        echo '  <td alt="'.$i.' x '.$j.'">'.$i*$j.'</td>';
    }

    echo '</tr>';
}
?>
</table>