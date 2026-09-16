<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inversion de Chaine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="cssChangerCouleur.css">
		</head>
	<body>
	<h1 class="
		<?php
			$chaineAChanger="Jean petit qui danse";

			for ($nombreLettre = 0; $nombreLettre <= strlen($chaineAChanger)-1; $nombreLettre++) {
					if ($nombreLettre %2 == 0) {
						echo "<span class='couleurRouge'>$chaineAChanger[$nombreLettre]</span>";
					} else {
						echo "$chaineAChanger[$nombreLettre]";
					}
			}
		?>
	</body>
</html>