<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=1603classificadosSemMVC;host=localhost", "root", "root");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>