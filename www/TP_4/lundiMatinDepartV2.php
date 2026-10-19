<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Les excuses du lundi matin</title>
		<link href="css/monStyle.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row cadre">	 
				<div class="col-12">
					<h1>Mon excuse :</h1>
					<p>
					<?php 
						include("tableauPhrases.php");

						foreach($tabExGen as $indice => $grosTableau) {
							if (isset($_POST['var' . $indice])) {
								$valeur = $_POST['var' . $indice];
								if (isset($grosTableau[$valeur])) {
									echo $grosTableau[$valeur] . " ";
								}
							}
						}
					?>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>