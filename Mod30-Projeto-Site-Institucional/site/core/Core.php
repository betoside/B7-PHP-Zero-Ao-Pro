<?php
class Core {

	public function run() {
		$url = $_SERVER['REQUEST_URI'];

		// echo $url;
		// exit;

		$params = array();
		$url = explode('/', $url);
		array_shift($url);
		array_shift($url);
		array_shift($url);
		array_shift($url);
		// echo '<pre>';
		// print_r($url);
		// echo '</pre>';
		// // [0] => 
		// exit;
		
		$url = implode(' ', $url);
		// echo '<pre>';
		// print_r($url);
		// echo '</pre>';
		// // site 
		// exit;

		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			// echo '<pre>';
			// print_r($url);
			// echo '</pre>';
			// 	[0] => 
			// 	[1] => B7-PHP-Zero-Ao-Pro
			// 	[2] => Mod30-Projeto-Site-Institucional
			// 	[3] => site
			// 	[4] => 
			// exit;
			// array_shift($url);
			// array_shift($url);
			// array_shift($url);
			// array_shift($url);
			// NOVAS: AJUSTE PARA PEGAR CONTROLLER CORRETO
			// echo '<pre>';
			// print_r($url);
			// echo '</pre>';
			// exit;
	
			$currentController = $url[0].'Controller';
			array_shift($url);

			// echo $currentController . '<br>'; // B7-PHP-Zero-Ao-ProController
			// exit;

			if(isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		// echo $currentController . '<br>'; // B7-PHP-Zero-Ao-ProController // CONTROLLER
		// echo $currentAction; // Mod30-Projeto-Site-Institucional // INDEX
		// exit;
		// http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site/

		// echo $base; // Undefined variable
		// echo $config['base']; // Undefined variable
		// exit;

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}

}