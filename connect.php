<?php
function Connect($host,$dbname,$usr,$pass) {
	$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$usr,$pass);
	return $connection;
}
function Connect2Root($host,$dbname) {
	$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",'root','1112');
	return $connection;
}
?>