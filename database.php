<?php

	define('HOST', 'mysql-coronatracks.alwaysdata.net');
	define('DB_NAME', 'coronatracks_db');
	define('USER', '221057');
	define('PASS', 'TalIlanDylan');

	try{
		$db = new PDO("mysql:host=". HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connect > OK <br>";
	} catch(PDOException $e){
		echo $e;
	}
