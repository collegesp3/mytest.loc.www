<?php
// ---- Original connection ---------
//$mysqli = new mysqli('localhost', 'u0884817_default', 'xXN_4WBf', 'u0884817_default');

// ----- Test connection ---------
$mysqli = new mysqli('localhost', 'root', '');



$mysqli->query("SET NAMES utf8");
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET character_set_connection=utf8");

?>
