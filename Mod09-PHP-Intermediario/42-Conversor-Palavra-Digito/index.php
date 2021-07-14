< <a href="../">mód 09: php intermediário</a> / <a href="">Reload</a>
<br><br>
<h2>Conversor de palavras em dígitos</h2>
<form action="" method="post">
    <input type="text" name="palavras" />
    <button>Calcular</button>
</form>
<?php
if (isset($_POST['palavras']) && !empty($_POST['palavras'])) {
    $palavras = $_POST['palavras'];
    $p = explode(',', $palavras);
    $numeros = [];
    // echo '<pre>';
    // print_r($palavras);
    // echo '</pre>';
    foreach ($p as $palavra) {
        switch ($palavra) {
            case 'zero':
                $numeros[] = 0;
                break;
            case 'um':
                $numeros[] = 1;
                break;
            case 'dois':
                $numeros[] = 2;
                break;
            case 'tres':
            case 'treis':
            case 'três':
                $numeros[] = 3;
                break;
            // .
            case 'quatro':
                $numeros[] = 4;
                break;
            // .
            case 'cinco':
                $numeros[] = 5;
                break;
            // .
            case 'seis':
                $numeros[] = 6;
                break;
                // .
                case 'sete':
                $numeros[] = 7;
                break;
            // .
            case 'oito':
                $numeros[] = 8;
                break;
            // .
            case 'nove':
                $numeros[] = 9;
                break;
            // .

        }
    }

    $n = implode(',', $numeros);
    // echo $n;
    // $novoNumeros = $numeros;
    // print_r($novoNumeros);
    // echo implode(',', $novoNumeros);
    // $pah = implode(',', $novoNumeros);
    // echo $pah;


    // print_r($n);
    // exit;
    
    echo $palavras . '<br>';
    echo $n;

    // echo '<pre>';
    // print_r($numeros);
    // echo '</pre>';
}
?>