<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Les excuses du lundi matin</title>
		<link href="css/monStyle.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<?php 
				include("tableauPhrases.php");

				if (isset($_POST['var1'])) {
			?>
					<div class="row cadre">	 
						<div class="col-12">
							<h1>Mon excuse :</h1>
							<p>
								<?php 
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
							(Vous pouvez modifier votre excuse en changeant les champs.)
						</div>
					</div>
			<?php 
				}
			?>

			<div class="row cadre">	 
				<div class="col-12">
					<?php 
						if (!isset($_POST['var1'])) { 
					?>
							<h1>Tous les lundis, une excuse différente ! </h1>
							Générez votre excuse du lundi matin en selectionnant les différents champs.<br>
					<?php 
						} 
					?>

					<form action="lundiMatinDepartV3.php" method="post">
						<?php 
							foreach($tabExGen as $indice => $grosTableau) {
								echo "<select name='var". $indice . "'>";
								
								foreach($grosTableau as $valeur => $excuse) {
									echo "<option value='".$valeur."'>".$excuse."</option>";
								}
								echo "</select><br>";
							}
						?>
						<br>
						<input type="submit" value="Générer l'excuse">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>