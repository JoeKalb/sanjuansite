<?php 
	// Create Connection 
	try{
		$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}catch (PDOException $e){
		print "Error!: ".$e->getMessage()."<br/>";
		die();
	}
?>