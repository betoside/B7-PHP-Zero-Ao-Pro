<?php
// echo 'hello core/model/model.php';
// exit;
class model {
	
	protected $db;

	public function __construct() {
		// echo $this;
		// exit;
		// echo 'dbname' . $config['dbname'] . '<br>';
		// echo 'host' . $config['host'] . '<br>';
		// echo 'dbuser' . $config['dbuser'] . '<br>';
		// echo 'dbpass' . $config['dbpass'] . '<br>';
		// exit;
		global $config;
		// $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

		try {
			$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'ERR: '.$e->getMessage();
		}
		
	}

}