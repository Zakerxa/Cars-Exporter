<?php

class Database
{
	public function connection(){
		$db_host = "localhost";
		$db_name = "zkurpszw_thida";
		$db_username = "zkurpszw_thida";
		$db_password = "sUia8qIdF}5j";
		
		$dsn_db = 'mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8mb4';
		try{
		   $pdo = new PDO($dsn_db, $db_username, $db_password);
		   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   return $pdo;

		}catch (PDOException $e){
		   echo $e->getMessage();
		   exit;
		}
	} 
}
