<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inversion de Chaine</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$chaineAInverser="Bonjour le monde !";
			$chaineInversee="";
			echo $chaineAInverser."<br>";
			
			for ($nombreLettre = strlen($chaineAInverser); $nombreLettre >= 0; $nombreLettre--) {
					$chaineInversee.=$chaineAInverser[$nombreLettre-1];
			}
			echo $chaineInversee;
		?>
	</body>
</html>