<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT A.NOMAUTEUR, L.TITRELIVRE
									FROM auteur A, livre L, rediger R
									WHERE A.IDAUTEUR = R.IDAUTEUR
									AND R.IDAUTEUR = L.IDLIVRE
									");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
		<meta charset="utf-8" /><title>Gestion des AUTEURS ET LIVRES</title>
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Informations Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><H2><table border=2 cellspacing=2>
						<thead><tr>
								<th>NOM AUTEUR</th>
								<th>TITRE LIVRE</th>																							
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['NOMAUTEUR'] ?></td>
									<td align="center"><?php echo $VBLETABLE['TITRELIVRE'] ?></td>
									<?php } ?>
						</tbody></table></H2><br><br><a href="index.php">Revenir Sur Le Menu Principal</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>