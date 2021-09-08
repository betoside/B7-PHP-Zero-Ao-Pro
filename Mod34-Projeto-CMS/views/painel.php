<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
    <link rel="stylesheet" href="<?=BASE;?>assets/css/painel.css?a=1">
</head>
<body>

    <div class="menu">
        <ul>
            <a href="<?=BASE;?>painel"><li>Páginas</li></a>
            <a href="<?=BASE;?>painel/menus"><li>Menus</li></a>
            <a href="<?=BASE;?>painel/config"><li>Configurações</li></a>
            <a href="<?=BASE;?>painel/logout"><li>Sair</li></a>
        </ul>
        <?php  ?>
    </div>

    <div class="container">
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>

</body>
</html>