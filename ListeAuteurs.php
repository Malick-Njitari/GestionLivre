<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM auteur");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des AUTEURS</title>
		<link rel="stylesheet" href="monstyle.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des auteurs Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>ID AUTEUR</th>
								<th>NOM AUTEUR</th>
								<th>PRENOM AUTEUR</th>
								<th>DATE NAISSANCE </th>												
								<th>ACTIONS</th>
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['IDAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['NOMAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['PRENOMAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['DATENAISSANCEAUTEUR'] ?></td>
									<td><!--  Action Editer un VBLETABLE -->
											<a href="Livres.php?IDAUTEUR=<?php echo $VBLETABLE['IDAUTEUR'] ?>">LES LIVRES
											</a>										
										<?php } ?>
									</td></tr>
						</tbody></table><br><br><a href="AjouterAuteur.php">Enregistrer Un Nouveau AUTEUR</a>
						<br> <br> 
						<br>
						<a href="index.php">Retour</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>