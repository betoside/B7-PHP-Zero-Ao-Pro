<?php
class controller {

	private $config;

	public function __construct()
	{
		$cfg = new Config(); 
		$this->config = $cfg->getConfig(); 
		// print_r( $this->config ); exit;
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		// print_r( $this->config ); exit;
		// include 'views/templates/'.$viewData['tpl'].'.php';
		include 'views/templates/'.$this->config['site_template'].'.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}


}