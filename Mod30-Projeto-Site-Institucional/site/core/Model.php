<?php
class model {
	
	protected $db;

	public function __construct() {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

		// $sql = "SELECT * FROM portifolio";
		// $sql = $this->db->query($sql);
		// if ($sql->rowCount() > 0) {
		// 	echo 'DB works!';
		// 	exit;
		// } else {
		// 	echo 'DB don\'t works!';
		// 	exit;
		// }
	}

}
?>