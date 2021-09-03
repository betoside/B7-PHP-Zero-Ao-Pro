<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->config['site_title'];?></title>
    <link rel="stylesheet" href="<?=BASE;?>assets/css/template.css">
</head>
<body>
    <div class="topo">Exemplo</div>
    <div class="menu"></div>
    <div class="container">
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>
    <div class="rodape"></div>
</body>
</html>