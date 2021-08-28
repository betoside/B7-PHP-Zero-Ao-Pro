<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/style.css">
    <title>meu site mvc</title>
    
</head>
<body>
    <h1>Topo</h1>
    <a href="<?=BASE_URL;?>">Home</a>
    <a href="<?=BASE_URL;?>/galeria">Galeria</a>
    <hr>
    <!-- ... conteudo ... --> <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    <script src="<?=BASE_URL;?>/assets/js/script.js"></script>
</body>
</html>