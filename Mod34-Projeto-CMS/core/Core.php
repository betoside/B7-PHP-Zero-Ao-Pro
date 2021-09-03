<?php
class Core {
	public function run() {
		// echo 'core / Core.php';
		// exit;
		$url = explode('index.php', $_SERVER['PHP_SELF']);
		// echo '<pre> $url: ';
		// print_r($url);
		// exit;
		// Array
		// 	[0] => /B7-PHP-Zero-Ao-Pro/Mod34-Projeto-CMS/
		// 	[1] => 
		// )
        $url = end($url); // ""
		// echo '<pre>$url = end($url): ';
		// print_r($url);
		// exit;
		$params = array();
		// echo '<pre>';
		// print_r($url);
		// echo '</pre>';
		// // [0] => 
		// exit;

		if(!empty($url)) {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

			// echo '1 <br>';

		} else {
			// echo '2 <br>';

			$currentController = 'homeController';
			$currentAction = 'index';
		}

		// echo $currentController . '<br>'; // homeController
		// echo $currentAction; // index
		// exit;

		if(file_exists('controllers/'.$currentController.'.php')) {
			// echo 'controler existe';
			// exit;
			$c = new $currentController();
			// echo '1 <br>';
			// print_r($c); //homeController Object ( [config:Controller:private] => )
			// exit;

		} else {

			// echo 'controler nao existe';
			// exit;

			// echo '2 <br>';

			$c = new paginaController();
			$currentAction = "index";
			$pNome = explode("Controller", $currentController);
			$pNome = $pNome[0];
			$params = array($pNome);
		}

		// echo '$c: ';
		// print_r($c); // $c: homeController Object ( [config:controller:private] => )
		// echo '<br>';
		// echo '$currentAction: ';
		// echo $currentAction; // index
		// echo '<br>';
		// echo '$params: ';
		// print_r($params); // Array ( )
		// exit;

		call_user_func_array(array($c, $currentAction), $params);

	}

}