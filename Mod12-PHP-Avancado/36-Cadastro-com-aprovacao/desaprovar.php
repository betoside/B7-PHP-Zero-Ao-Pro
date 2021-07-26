<?php
require 'config.php';
$a = $_GET['a'];
if ($a == 0) {
    $pdo->query("UPDATE usuarios SET status = '0'");
} elseif ($a == 1) {
    $pdo->query("UPDATE usuarios SET status = '1'");
}
header('Location: index.php');
exit;