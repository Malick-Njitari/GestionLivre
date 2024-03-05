<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>NomTable - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="monstyle.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="InsertTable.php" enctype="multipart/form-data">
						<div>
							<label for="Colonne1" class="control-label">Libellé_Colonne1</label>
							<input type="text" name="Colonne1" id="Colonne1"/><br><br>
						</div>
						<div>
							<label for="Colonne2" class="control-label">Libellé_Colonne2</label>
							<input type="text" name="Colonne2" id="Colonne2"/><br><br>
						</div>
						<div>
							<label for="Colonne3" class="control-label">Libellé_Colonne3</label>
							<input type="text" name="Colonne3" id="Colonne3"/><br><br>
						</div>
						<div>
							<label for="Colonne4" class="control-label">Libellé_Colonne4</label>
							<input type="text" name="Colonne4" id="Colonne4"/><br><br>
						</div>																	
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="ListeTable.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>