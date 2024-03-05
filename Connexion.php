<?php		
	try {
	    $con = new PDO("mysql:host=localhost;dbname=gestionlivre",
	        "root", "");
		
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());	
	}	
?>