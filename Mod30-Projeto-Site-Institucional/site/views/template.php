<?php 
$base = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site";
?>
<html>
	<head>
		<title>Site Institucional</title>
		<link rel="stylesheet" href="<?=$base;?>/assets/css/template.css" />
	</head>
	<body>
		<div class="topo">
                    <div class="topo1"></div>
                    <div class="banner"></div>
		</div>
		<div class="menu">
                    <ul>
                        <a href="<?=$base;?>/"><li>HOME</li></a>
                        <a href="<?=$base;?>/portifolio"><li>PORTIFOLIO</li></a>
                        <a href="<?=$base;?>/sobre"><li>SOBRE</li></a>
                        <a href="<?=$base;?>/servicos"><li>SERVIÇOS</li></a>
                        <a href="<?=$base;?>/contato"><li>CONTATO</li></a>
                    </ul>
		</div>
		<div class="container">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<div class="rodape"></div>
	</body>
</html>