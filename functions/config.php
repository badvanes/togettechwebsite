<?php 	
	session_start();
	$dbhost = 'localhost';
	$dbname = 'togettech';
	$dbuser = 'root';
	$dbpswd = 'root';

	try {
		$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8 ', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));		
	} catch (PDOException $e) {
		die("Une erreur est survenue lors de la connexion à la base de donnees");		
	}

	function isLogged(){
		if (isset($_SESSION['togettech'])) {
			$logged = 1;
		}else{
			$logged = 0;
		}
		return $logged;
	}