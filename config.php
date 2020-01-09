<?php

	// Página de configuração com o banco de dados

	$config = array();

		define("BASE_URL", "http://localhost/twitter/");
		$config['dbname'] = 'twitter';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '#MySQL4242';

	global $db;

	try{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}catch(PDOException $e){
		echo "ERROR: " .$e->getMessage();
		exit;
	}
