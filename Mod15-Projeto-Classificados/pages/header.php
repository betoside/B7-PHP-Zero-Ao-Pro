<?php 
require 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/"> -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/style.css?cache5">
    <title>Classificados</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="./">Classificados</a>
            </div>
            <ul class="nav justify-content-end">

                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin']) ): ?>

                    <?php
                    require 'classes/usuarios.class.php';
                    $u = new Usuarios();
                    $userNome = $u->getUserNome($_SESSION['cLogin']);
                    ?>
                    <li>
                        <span class="nav-link text-warning" style="text-transform: capitalize;">Seja bem-vindo <strong><?=$userNome;?></strong></span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="meus-anuncios.php">Meus anúncios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link active-" aria-current="page" href="cadastre-se.php">Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                <?php endif ?>

                <!-- 
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                -->
            </ul>

        </div>
    </nav>
    <br><br>