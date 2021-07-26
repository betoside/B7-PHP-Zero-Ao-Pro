<?php
class controller {
    private $config;

	public function __construct()
	{
		$cfg = new Config();
		$this->config = $cfg->getConfig();

		print_r($this->config);
		exit;
	}

	
	public function loadView($viewName, $viewData = array()) {
		// echo '$viewName: '.$viewName.'<br>';
		// echo '$viewData: '.$viewData;
		// exit;
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {

        // echo '<br> hello: core/Controller.php > $viewName, $viewData = array() <br>';
        // echo '<pre>this->config: ';
        // print_r($this->config);
        // echo '</pre>';
		// echo '$viewName: - ' . $viewName . ' -<br>'; // home
		// echo '<b>$viewData</b>: ' . print_r($viewData) . '<br>';
        // exit;

		include 'views/templates/'.$viewName.'.php';
		// include 'views/templates/'.$viewData['tpl'].'.php';
		// include 'views/templates/'.$this->config['site_template'].'.php';
		// include 'views/templates/default.php'; // <<-- esperando isso
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

}