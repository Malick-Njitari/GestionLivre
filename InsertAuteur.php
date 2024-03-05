<?php
	require_once('connexion.php');
	$Lib1=$_POST['NOMAUTEUR'];	
	$Lib2=$_POST['PRENOMAUTEUR'];	
	$Lib3=$_POST['DATENAISSANCEAUTEUR'];	
		
	$requete="INSERT INTO auteur(NOMAUTEUR,PRENOMAUTEUR,DATENAISSANCEAUTEUR) values(?,?,?)";	
	$param=array($Lib1,$Lib2,$Lib3,);	
	$resultat = $con->prepare($requete);
	$resultat->execute($param);	
	header("location:ListeAuteurs.php");
?>