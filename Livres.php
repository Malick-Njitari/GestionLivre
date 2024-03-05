<?php
	$id=$_GET['IDAUTEUR'];
	require_once('connexion.php');
		$resultat = $con->query("SELECT A.NOMAUTEUR, A.PRENOMAUTEUR, L.TITRELIVRE, R.NBRECHAPITRE
									FROM auteur A, livre L, rediger R
									WHERE A.IDAUTEUR = R.IDAUTEUR
									AND R.IDLIVRE = L.IDLIVRE
									AND A.IDAUTEUR=$id");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
		<meta charset="utf-8" /><title>Listing des AUTEUR Et LIVRES</title>
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Informations Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><H2><table border=2 cellspacing=2>
						<thead><tr>
								<th>NOM AUTEURS</th>
								<th>PRENOM AUTEURS</th>
								<th>TITRE LIVRES</th>
								<th>NOMBRE CHAPITRE</th>																																																												
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['NOMAUTEUR'] ?></td>
									<td align="center"><?php echo $VBLETABLE['PRENOMAUTEUR'] ?></td>
									<td align="center"><?php echo $VBLETABLE['TITRELIVRE'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NBRECHAPITRE'] ?></td>
									<?php } ?>
						</tbody></table></H2><br><br><a href="index.php">Revenir Sur Le Menu Principal</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>