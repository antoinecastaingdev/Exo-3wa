<?php
include_once('commun.inc.php');
$nom = 'Olivier';
$date = new DateTime("now");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Accueil</title>
	<style>
		table {
			border-collapse: collapse;
		}

		table,
		td,
		th {
			border: 1px solid black;
		}

		td,
		th {
			padding: 4px;
		}
	</style>
</head>

<body>
	<div>
		<?php
		// Afficher les messages
		echo "Bonjour $nom.<br>";
		echo 'Bienvenue sur ', NOM_SITE, '.<br>';
		echo "Nous sommes le " . $date->format('l d F Y') . "<br>";

		// Compter le nombre de lettres du nom.
		echo "Votre nom comporte " . strlen($nom) . " lettres.<br>";

		// Déterminer si le nom commence par une voyelle ou une consonne.
		$voyelles = ["a", "e", "o", "i", "u", "y"];
		$consonnes = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"];
		$nameFirstLetterType = "Erreur <br>";
		if (in_array(strtolower($nom[0]), $voyelles)) $nameFirstLetterType = 'Votre nom commence par une voyelle.<br>';
		if (in_array(strtolower($nom[0]), $consonnes)) $nameFirstLetterType = 'Votre nom commence par une consonne.<br>';
		echo $nameFirstLetterType;
		$vowelCount = preg_match_all('/[AEIOUY]/i', $nom);
		echo "Votre nom comporte $vowelCount voyelles <br>";
		$authorCount = count($auteurs);
		echo "Il y a $authorCount dans la liste <br>";
		$favoriteAuthor = $auteurs[rand(0, $authorCount)];
		echo "Mon auteur favori est $favoriteAuthor";
		?>

		<!-- Afficher le tableau des auteurs. -->
		<table>
			<tr>
				<th>Auteurs</th>
			</tr>
			<?php
			foreach ($auteurs as $auteur) {
				echo "<tr><td>$auteur</td></tr>";
			}
			?>
		</table>
	</div>
</body>

</html>